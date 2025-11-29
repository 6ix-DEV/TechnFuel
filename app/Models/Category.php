<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;

class Category extends Model
{
   
    //Configuration for the Category model
    protected $fillable = ['id', 'description'];

     //Relation -> Une Category a un ou plusieur Produits -> 1-N vers Produit
    public function products()
    {
        return $this->hasMany(Produit::class);
    }

}
