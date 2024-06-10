<?php

namespace App\Filament\Resources\AccessRolesResource\Pages;

use App\Filament\Resources\AccessRolesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccessRoles extends ListRecords
{
    protected static string $resource = AccessRolesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
