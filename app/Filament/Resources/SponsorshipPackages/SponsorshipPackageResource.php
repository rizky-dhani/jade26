<?php

namespace App\Filament\Resources\SponsorshipPackages;

use App\Filament\Resources\SponsorshipPackages\Pages\CreateSponsorshipPackage;
use App\Filament\Resources\SponsorshipPackages\Pages\EditSponsorshipPackage;
use App\Filament\Resources\SponsorshipPackages\Pages\ListSponsorshipPackages;
use App\Filament\Resources\SponsorshipPackages\Schemas\SponsorshipPackageForm;
use App\Filament\Resources\SponsorshipPackages\Tables\SponsorshipPackagesTable;
use App\Models\SponsorshipPackage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SponsorshipPackageResource extends Resource
{
    protected static ?string $model = SponsorshipPackage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SponsorshipPackageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SponsorshipPackagesTable::configure($table);
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
            'index' => ListSponsorshipPackages::route('/'),
            'create' => CreateSponsorshipPackage::route('/create'),
            'edit' => EditSponsorshipPackage::route('/{record}/edit'),
        ];
    }
}
