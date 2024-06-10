<?php

namespace App\Filament\Resources\UserAccessesResource\Pages;

use App\Filament\Resources\UserAccessesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserAccesses extends EditRecord
{
    protected static string $resource = UserAccessesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
