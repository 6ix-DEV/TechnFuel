<?php

namespace App\Filament\Resources\Commandes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CommandeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('description'),
                TextInput::make('total')
                    ->required()
                    ->numeric(),
                TextInput::make('statut')
                    ->required()
                    ->default('en cours'),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
