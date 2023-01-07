<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Projects;

class ProjectController extends Controller
{
    public function boot()
{
    Schema::defaultStringLength(191);
    $this->app->bind(Project::class);
}
    public function index()
    {   
       
        return Inertia::render('Project/Index');
        
    }
    public function store(Request $request) {
        $request->validate([
            'client_id' => 'required',
            'nom_responsable' => 'required',
            'prenom_responsable' => 'required',
            'email_responsable' => 'required',
            'telephone_responsable' => 'required',
            'titre' => 'required',
            'description' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'statut' => 'required',
            'jours_vendus' => 'required',
            'slug' => 'required',
        ]);
        Project::create($request->all())->firstOrFailed();
        return redirect()->route('client.store');
        }
}

