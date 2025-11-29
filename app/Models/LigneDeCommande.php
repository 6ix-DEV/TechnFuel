<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LigneDeCommande extends Model
{
    //Configuration du modele LigneDeCommande
    protected $fillable = ['id', 'produit_id', 'commande_id', 'quantité', 'prix_unitaire'];
    //Modèle LigneDeCommande Configuré.

    //Branches des relations entre les tables
    //Relation -> Une LigneDeCommande appartient à un Produit -> N,1
    public function produit()   
    {
        return $this->belongsTo(Produit::class);
    }

    //Relation -> Une LigneDeCommande appartient à une ou plusieur Commande -> 1,N vers Commande
    public function commande()
    {
        return $this->hasMan(Commande::class);    
    }
}
