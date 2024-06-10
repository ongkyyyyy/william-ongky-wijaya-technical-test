<?php

namespace App\Filament\User\Resources\PersonalIdentityResource\Pages;

use App\Filament\User\Resources\PersonalIdentityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersonalIdentity extends EditRecord
{
    protected static string $resource = PersonalIdentityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
