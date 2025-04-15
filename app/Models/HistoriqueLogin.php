<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoriqueLogin extends Model
{
    protected $table = 'historique_logins';
    protected $primaryKey = 'ID_login';

    protected $fillable = [
        'ID_utilisateur', 'Date_login', 'Adresse_IP', 'Statut'
    ];

    public $timestamps = true;
}
