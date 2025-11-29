<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    //Configuration du modele Produit
    protected $fillable = ['id', 'name', 'description', 'prix','quantité','statut', 'category_id'];
    //Modèle Produuit Configuré.

    //Branches des relations entre les tables
    //Raletion -> Un Produit a une et une seule Category -> 1,1 vers Category
    public function category()
    {
        return $this->hasOne(Category::class);
    }

    //Realation -> Un Produit a un ou plusieurs ligne de commande 1-N vers LigneCommande
    public function ligneCommandes()
    {
        return $this->hasMany(LigneDeCommande::class);
    }

    //Realation -> Un Produit a un ou plusieurs paniers 1-N vers Panier
    public function paniers()
    {
        return $this->hasMany(Panier::class);
    }

}

