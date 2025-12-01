<?php

namespace App\Filament\Resources\LigneDeCommandes\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class LigneDeCommandeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('commande_id')
                    ->numeric(),
                TextEntry::make('quantité')
                    ->numeric(),
                TextEntry::make('prix_unitaire')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('produit_id')
                    ->numeric(),
            ]);
    }
}
