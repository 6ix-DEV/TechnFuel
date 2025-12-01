<?php

namespace App\Filament\Resources\LigneDeCommandes;

use App\Filament\Resources\LigneDeCommandes\Pages\CreateLigneDeCommande;
use App\Filament\Resources\LigneDeCommandes\Pages\EditLigneDeCommande;
use App\Filament\Resources\LigneDeCommandes\Pages\ListLigneDeCommandes;
use App\Filament\Resources\LigneDeCommandes\Pages\ViewLigneDeCommande;
use App\Filament\Resources\LigneDeCommandes\Schemas\LigneDeCommandeForm;
use App\Filament\Resources\LigneDeCommandes\Schemas\LigneDeCommandeInfolist;
use App\Filament\Resources\LigneDeCommandes\Tables\LigneDeCommandesTable;
use App\Models\LigneDeCommande;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LigneDeCommandeResource extends Resource
{
    protected static ?string $model = LigneDeCommande::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'LigneDeCommmande';

    public static function form(Schema $schema): Schema
    {
        return LigneDeCommandeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LigneDeCommandeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LigneDeCommandesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLigneDeCommandes::route('/'),
            'create' => CreateLigneDeCommande::route('/create'),
            'view' => ViewLigneDeCommande::route('/{record}'),
            'edit' => EditLigneDeCommande::route('/{record}/edit'),
        ];
    }
}
