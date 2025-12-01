<?php

namespace App\Filament\Resources\LigneDeCommandes\Pages;

use App\Filament\Resources\LigneDeCommandes\LigneDeCommandeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLigneDeCommande extends ViewRecord
{
    protected static string $resource = LigneDeCommandeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
