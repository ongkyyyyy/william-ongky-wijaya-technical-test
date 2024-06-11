<?php

namespace App\Filament\User\Resources\PersonalIdentityResource\Pages;

use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Redirect;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\User\Resources\PersonalIdentityResource;

class CreatePersonalIdentity extends CreateRecord
{
    protected static string $resource = PersonalIdentityResource::class;

    public function mount(): void
    {
        if (PersonalIdentityResource::userHasPersonalIdentity()) {
            Notification::make()
                ->title('Error')
                ->body('You already have a personal identity record.')
                ->danger()
                ->send();

            Redirect::to(static::getResource()::getUrl('index'));
        }

        parent::mount();
    }
}

