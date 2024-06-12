<?php

namespace App\Filament\User\Resources\PersonalIdentityResource\Pages;

use App\Filament\User\Resources\PersonalIdentityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class ListPersonalIdentities extends ListRecords
{
    protected static string $resource = PersonalIdentityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        $userId = Auth::id();
        return parent::getTableQuery()->where('users_id', $userId);
    }
}
