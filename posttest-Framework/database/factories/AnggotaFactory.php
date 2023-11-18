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
            'ID_anggota' => 'ID-'.fake()->unique()->numberBetween(10000, 999999),
            'nama' => fake()->name(),
            'angkatan' => fake()->randomElement(['2019', '2020', '2021', '2022', '2023']),
            'jabatan' => fake()->randomElement(['Ketua', 'Sekretaris', 'Bendahara', 'Anggota']),
            'foto' => 'Herni.jpg',
            'departemen_id' => Departemen::all()->random()->id,

        ];
    }
}
