<?php

namespace App\Filament\Auth;

use Filament\Pages\Auth\Register;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\PasswordInput;
use Filament\Forms\Components\Checkbox;
use Illuminate\Validation\ValidationException;

class CustomRegister extends Register
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getUsernameFormComponent(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                        $this->getTermsFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getNameFormComponent(): Component
    {
        return TextInput::make('name')
            ->label(__('Name'))
            ->required()
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getUsernameFormComponent(): Component
    {
        return TextInput::make('username')
            ->label(__('Username'))
            ->required()
            ->autocomplete()
            ->extraInputAttributes(['tabindex' => 2]);
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label(__('Email'))
            ->required()
            ->autocomplete()
            ->extraInputAttributes(['tabindex' => 3]);
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label(__('Password'))
            ->required()
            ->autocomplete()
            ->extraInputAttributes(['tabindex' => 4]);
    }

    protected function getPasswordConfirmationFormComponent(): Component
    {
        return TextInput::make('password_confirmation')
            ->label(__('Confirm Password'))
            ->required()
            ->autocomplete()
            ->extraInputAttributes(['tabindex' => 5]);
    }

    protected function getTermsFormComponent(): Component
    {
        return Checkbox::make('terms')
            ->label(__('I agree to the terms and conditions'))
            ->required()
            ->extraInputAttributes(['tabindex' => 6]);
    }

    protected function getRegistrationData(array $data): array
    {
        return [
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ];
    }

    protected function throwFailureValidationException(): never
    {
        throw ValidationException::withMessages([
            'data.username' => __('filament-panels::pages/auth/register.messages.failed'),
        ]);
    }
}
