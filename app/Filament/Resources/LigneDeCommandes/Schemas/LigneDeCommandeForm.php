<?php

namespace App\Filament\Resources\LigneDeCommandes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LigneDeCommandeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('commande_id')
                    ->required()
                    ->numeric(),
                TextInput::make('quantité')
                    ->required()
                    ->numeric(),
                TextInput::make('prix_unitaire')
                    ->required()
                    ->numeric(),
                TextInput::make('produit_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
