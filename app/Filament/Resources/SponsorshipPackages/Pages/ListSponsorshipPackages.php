<?php

namespace App\Filament\Resources\SponsorshipPackages\Pages;

use App\Filament\Resources\SponsorshipPackages\SponsorshipPackageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSponsorshipPackages extends ListRecords
{
    protected static string $resource = SponsorshipPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
