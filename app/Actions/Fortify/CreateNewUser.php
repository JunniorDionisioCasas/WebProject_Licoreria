<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Validation\Rules\Password;
use Carbon\Carbon;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $maxDate = Carbon::now('-05:00')->subYears(18)->format('Y-m-d');
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'confirmed',
                Password::min(8)
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
            ],//$this->passwordRules(),
            'numero_documento' => ['required',  'between:8,11'],
            'fecha_nacimiento' => ['required', 'before_or_equal:'.$maxDate],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'usr_apellidos' => $input['last_name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'usr_num_documento' => $input['numero_documento'],
            'usr_fecha_nacimiento' => $input['fecha_nacimiento']
        ]);
    }
}
