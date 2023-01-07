<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Client;

class ClientController extends Controller
{
    public function index() {
        return Inertia::render('Client/Index', [
            'pageTitle' => 'Client',
            'clients' => Client::all()
        ]);

    }
    public function create() {
        return Inertia::render('Client/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_raison_sociale' => 'required',
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
            'client_raison_sociale',
            'description',
            'status_juridique',
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
}
