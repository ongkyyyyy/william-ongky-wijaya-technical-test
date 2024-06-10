<?php

namespace App\Filament\Resources\PersonalIdentityResource\Pages;

use App\Filament\Resources\PersonalIdentityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersonalIdentities extends ListRecords
{
    protected static string $resource = PersonalIdentityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
