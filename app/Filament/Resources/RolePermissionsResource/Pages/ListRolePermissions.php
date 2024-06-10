<?php

namespace App\Filament\Resources\RolePermissionsResource\Pages;

use App\Filament\Resources\RolePermissionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRolePermissions extends ListRecords
{
    protected static string $resource = RolePermissionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
