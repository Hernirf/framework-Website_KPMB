<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Departemen;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anggota>
 */
class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ID_anggota' => fake()->unique()->numberBetween(1000000000, 9999999999),
            'nama' => fake()->name(),
            'angkatan' => fake()->randomElement(['2019', '2020', '2021',
            '2022', '2023']),
            'jabatan' => fake()->randomElement(['Ketua', 'Sekretaris', 'Bendahara',
            'Anggota']),
            'departemen_id' => Departemen::all()->random()->id,
        ];
    }
}
