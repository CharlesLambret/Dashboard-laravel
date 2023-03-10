<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Projects extends Model
{
 
    public function client()
    {
    return $this->belongsTo(Client::class);
    }
    use HasFactory;
    protected $fillable = [
        'client_id',
        'nom_responsable',
        'prenom_responsable',
        'email_responsable',
        'telephone_responsable',
        'titre_projet',
        'description',
        'debut',
        'fin',
        'statut',
        'jours_vendus',
        ];
}
