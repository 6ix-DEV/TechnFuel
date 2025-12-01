<?php

namespace App\Filament\Resources\LigneDeCommandes\Pages;

use App\Filament\Resources\LigneDeCommandes\LigneDeCommandeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLigneDeCommandes extends ListRecords
{
    protected static string $resource = LigneDeCommandeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
