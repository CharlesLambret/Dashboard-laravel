<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Projects extends Model
{
    protected $table ='projects';
    public function client()
    {
    return $this->belongsTo(Client::class);
    }
    use HasFactory;
    protected $fillable = [
        'client_id',
        'client_name',
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
