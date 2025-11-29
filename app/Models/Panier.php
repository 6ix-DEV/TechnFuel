<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    //Configuration du modele Panier
    protected $fillable = ['id', 'user_id', 'produit_id', 'quantité'];
    //Modèle Panier Configuré.

    //Branches des relations entre les tables
    //Relation -> Un Panier appartient à un Utilisateur -> 1,1 vers User
    public function user()
    {
        return $this->hasOne(User::class);
    }   

    //Relation -> Un panier appartient à un ou Plusieur Produit -> 1,N
    public function produit()
    {
        return $this->hasMany(Produit::class);
    }

}
