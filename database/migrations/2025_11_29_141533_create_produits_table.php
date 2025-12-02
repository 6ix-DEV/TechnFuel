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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('prix', 8, 2);
            $table->integer('quantite')->default(0);
            $table->boolean('statut')->default(true);
            $table->foreignId('category_id')->constrained()->onDelete('cascade');// Configuration de la clé étrangere de la table Category.
            $table->timestamps();
            
            
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
