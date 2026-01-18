<?php

namespace App\Filament\Resources\SponsorshipPackages\Pages;

use App\Filament\Resources\SponsorshipPackages\SponsorshipPackageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSponsorshipPackage extends EditRecord
{
    protected static string $resource = SponsorshipPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
