<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ligne_de_commandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commande_id');
            $table->integer('quantité');
            $table->decimal('prix_unitaire', 8, 2);
            $table->timestamps();
            
            //Clé étrangere vers la table Produits
            $table->unsignedBigInteger('produit_id');
            //Clé étrangere vers la table Commandes
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligne_de_commandes');
    }
};
