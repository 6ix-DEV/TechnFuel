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
            $table->integer('quantite');
            $table->decimal('prix_unitaire', 8, 2);
            $table->foreignId('commande_id')->constrained()->onDelete('cascade');//Clé étrangere vers la table Commandes
            $table->foreignId('produit_id')->constrained()->onDelete('cascade'); //Clé étrangere vers la table Produits
            $table->timestamps();
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
