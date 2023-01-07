<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Client extends Model
{   
    protected $table ='clients';
    public function projects()
{
    return $this->hasMany(Project::class);
}

    use HasFactory;
    protected $fillable = ['client_raison_sociale',
    'description' ,
    'statut_juridique',
    'capital' ,
    'numero_de_siret' ,
    'codeNAF',
    'adresse_siege_social',
    'pays',
    'adresse',
    'code_postale' ,
    'ville' ,
        ];

}
