<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Projects;
use App\Models\Client;

class ProjectController extends Controller
{
    public function index()
    {   
       
        return Inertia::render('Project/Index', [
            'projects'=> Projects::all()
        ]);
    }
    public function edit($id) {
        $projects = Projects::where('id', $id)->firstOrFail();

        return Inertia::render("Project/Edit", [
            'projects' => $projects
        ]);
    }
    public function update(Request $request, $id)
    {
        $project= Projects::where('id', $id)->firstOrFail();

        $request->validate([
            'client_id' => 'required',
            'nom_responsable' => 'required',
            'prenom_responsable' => 'required',
            'email_responsable' => 'required',
            'telephone_responsable' => 'required',
            'titre_projet' => 'required',
            'description' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'statut' => 'required',
            'jours_vendus' => 'required',
        ]);

        $project->update($request->only([
        'client_id',
        'nom_responsable' ,
        'prenom_responsable' ,
        'email_responsable' ,
        'telephone_responsable' ,
        'titre_projet' ,
        'description' ,
        'debut' ,
        'fin' ,
        'statut' ,
        'jours_vendus' ,]));

        return redirect()->route('project.index');
    }
    public function store(Request $request) {
        $request->validate([
            'client_id' => 'required',
            'nom_responsable' => 'required',
            'prenom_responsable' => 'required',
            'email_responsable' => 'required',
            'telephone_responsable' => 'required',
            'titre_projet' => 'required',
            'description' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'statut' => 'required',
            'jours_vendus' => 'required',
        
           
        ]);
        Projects::create($request->only([
            'client_id',
            'nom_responsable' ,
            'prenom_responsable' ,
            'email_responsable' ,
            'telephone_responsable' ,
            'titre_projet' ,
            'description' ,
            'debut' ,
            'fin' ,
            'statut' ,
            'jours_vendus' ,
            ]));

        return redirect()->route('project.index');
    }
        public function create()
        {
            return Inertia::render("Project/Create", [
                'clients' =>  Client::all()
                
            ]);
            
        }
        
}

