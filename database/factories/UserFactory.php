<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'doi' => fake()->unique()->dni(),
            'name' => fake()->firstname(),
            'apellidos' => fake()->lastname,
            'fechalta' => fake()->dateTimeBetween('-10 years', 'now'),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            // la password está hardcodeada en la migración de la tabla users a 'secretos'.
//            'password' => '$2y$10$QlfN7CbALaYJSTPmQ69CdeW5uFOd3pcm.Gke78.pypt.zQljlso/2', // password hardcoded to 'secretos'
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
