<?php

namespace App\Filament\Resources\Paniers\Pages;

use App\Filament\Resources\Paniers\PanierResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPanier extends ViewRecord
{
    protected static string $resource = PanierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
