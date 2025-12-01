<?php

namespace App\Filament\Resources\Paniers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PanierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Toggle::make('statut')
                    ->required(),
                TextInput::make('quantité')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
