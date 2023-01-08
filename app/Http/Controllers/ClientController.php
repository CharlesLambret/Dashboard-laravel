<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Client;
use App\Models\Projects;

class ClientController extends Controller
{   
    
    public function index() {
        $clients = Client::all();
        $projects = Projects::all();
        return Inertia::render('Client/Index', [
            'pageTitle' => 'Client',
            'clients' => $clients,
            'projects' => $projects,
        ]);

    }
    public function edit($id) {
        $clients = Client::all();
        return Inertia::render("Client/Edit", [
            'clients' =>  $clients,
        ]);
    }
    public function update(Request $request, $id)
    {
        $client= Client::where('id', $id)->firstOrFail();

        $request->validate([
            'raison_sociale' => 'required',
            'description' => 'required',
            'statut_juridique' => 'required',
            'capital' => 'required',
            'numero_de_siret' => 'required',
            'codeNAF' => 'required',
            'pays' => 'required',
            'adresse' => 'required',
            'code_postale' => 'required',
            'ville' => 'required',
        ]);

        $project->update($request->only([
            'raison_sociale',
            'description',
            'statut_juridique',
            'capital',
            'numero_de_siret',
            'codeNAF',
            'pays',
            'adresse',
            'code_postale',
            'ville' ,]));

        return redirect()->route('client.index');
    }
    public function create() {
        return Inertia::render('Client/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'raison_sociale' => 'required',
            'description' => 'required',
            'statut_juridique' => 'required',
            'capital' => 'required',
            'numero_de_siret' => 'required',
            'codeNAF' => 'required',
            'pays' => 'required',
            'adresse' => 'required',
            'code_postale' => 'required',
            'ville' => 'required',
        ]);

        Client::create($request->only([
            'raison_sociale',
            'description',
            'statut_juridique',
            'capital',
            'numero_de_siret',
            'codeNAF',
            'pays',
            'adresse',
            'code_postale',
            'ville'
            ]));

        return redirect()->route('client.index');
    }
    public function delete($id) {
        $client = Client::where('id', $id)->firstOrFail();
        $client->delete();

        return redirect()->route('client.index');
    }
}
