<?php

namespace App\Filament\Resources\Produits\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProduitForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('prix')
                    ->required()
                    ->numeric(),
                TextInput::make('quantité')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('statut')
                    ->required(),
                TextInput::make('category_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
