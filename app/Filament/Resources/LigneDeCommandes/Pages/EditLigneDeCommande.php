<?php

namespace App\Filament\Resources\LigneDeCommandes\Pages;

use App\Filament\Resources\LigneDeCommandes\LigneDeCommandeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditLigneDeCommande extends EditRecord
{
    protected static string $resource = LigneDeCommandeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
