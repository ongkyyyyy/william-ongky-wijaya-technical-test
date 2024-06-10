<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Filament\Forms;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class CustomRegister extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $username;
    public $email;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.auth.custom-register');
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('username')
                ->label('Username')
                ->required()
                ->autocomplete('username')
                ->autofocus(),
            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->email()
                ->required()
                ->autocomplete('email'),
            Forms\Components\PasswordInput::make('password')
                ->label('Password')
                ->required()
                ->autocomplete('new-password'),
            Forms\Components\PasswordInput::make('password_confirmation')
                ->label('Confirm Password')
                ->required()
                ->same('password'),
        ];
    }

    public function register()
    {
        $data = $this->validate();

        if (User::where('username', $data['username'])->exists()) {
            throw ValidationException::withMessages([
                'username' => 'Username is already taken.',
            ]);
        }

        if (User::where('email', $data['email'])->exists()) {
            throw ValidationException::withMessages([
                'email' => 'Email is already registered.',
            ]);
        }

        User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('filament.auth.login');
    }
}
