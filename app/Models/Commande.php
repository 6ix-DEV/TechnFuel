<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    //Configuration du modele Commande
    protected $fillable = ['id', 'user_id', 'date_commande', 'statut'];
    //Modèle Commande Configuré.

    //Branches des relations entre les tables
    //Relation -> Une Commande appartient à un Utilisateur -> 1,1
    public function user()
    {
        return $this->hasOne(User::class);
    }

    //Relation -> Une Commande a une ou plusieurs LigneDeCommande -> 1-N vers LigneDeCommande
    public function ligneCommandes()
    {
        return $this->hasMany(LigneDeCommande::class);      
    }   

}
