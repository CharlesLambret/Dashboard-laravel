<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Projects;

class ProjectController extends Controller
{
    public function index()
    {   
       
        return Inertia::render('Project/Index', [
            'projects'=> Projects::all()
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'client_name' => 'required',
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
            'client_name',
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

        return redirect()->route('projects.index');
    }
        public function create()
        {
            return Inertia::render("Project/Create");
        }
        public function edit($id) {
            $projects = Projects::where('id', $id)->firstOrFail();
    
            return Inertia::render("Blog/Edit", [
                'projects' => $projects
            ]);
        }
}

