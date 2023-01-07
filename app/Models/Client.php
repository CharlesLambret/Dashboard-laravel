<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Client extends Model
{
    public function projects()
{
    return $this->hasMany(Project::class);
}

    use HasFactory;
    protected $fillable = ["description",
        "raison_sociale",
        "status_juridique",
        'capital',
        'numero_de_siret',
        'codeNAF',
        'pays',
        'adresse',
        'code_postale',
        'ville',
        ];

}
