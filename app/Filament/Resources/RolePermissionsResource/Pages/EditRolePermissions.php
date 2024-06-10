<?php

namespace App\Filament\Resources\RolePermissionsResource\Pages;

use App\Filament\Resources\RolePermissionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRolePermissions extends EditRecord
{
    protected static string $resource = RolePermissionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
