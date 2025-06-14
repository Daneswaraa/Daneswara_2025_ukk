<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Register extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 
                'string', 
                'lowercase', 
                'email', 
                'max:255', 
                'unique:' . User::class,
                function ($attribute, $value, $fail) {
                    if (!Siswa::where('email', $value)->exists()) {
                        $fail('Email ini tidak terdaftar sebagai siswa.');
                    }
                }
            ],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        // Assign role siswa jika kamu pakai Spatie Roles
        $user->assignRole('siswa');

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}
