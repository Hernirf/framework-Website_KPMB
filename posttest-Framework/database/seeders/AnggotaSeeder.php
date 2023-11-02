<?php

namespace Database\Seeders;

use App\Models\Departemen;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departemens = [
            [
                'id' => '1',
                'nama_departemen' => 'KPSDM',
            ],
            [
                'id' => '2',
                'nama_departemen' => 'KESOSMAS',
            ], [
                'id' => '3',
                'nama_departemen' => 'Inti',
            ], [
                'id' => '4',
                'nama_departemen' => 'BUD',
            ], [
                'id' => '5',
                'nama_departemen' => 'Kesekretariatan',
            ], [
                'id' => '6',
                'nama_departemen' => 'Eksternal',
            ],

        ];

        foreach ($departemens as $dpr){
            Departemen::create([
            'id' => $dpr['id'],
            'nama_departemen' => $dpr['nama_departemen'],

        ]);
    }
}
}
