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
            'clients' =>Client::all()
        ]);

    }
    public function create() {
        return Inertia::render('Client/Create');
    }

    public function store(Request $request) {
        $request->validate(['description' => 'required',
            'status_juridique' => 'required',
            'capital' => 'required',
            'numero_de_siret' => 'required',
            'codeNAF' => 'required',
            'adresse_siege_social' => 'required',
            'pays' => 'required',
            'adresse' => 'required',
            'code_postale' => 'required',
            'ville' => 'required',]);

        Client::create($request->all())->firstOrFailed();
        return redirect()->route('client.store');
    }
}
