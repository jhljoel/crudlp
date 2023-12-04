<?php

namespace Database\Seeders;

use App\Models\Convocatoriappp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConvocatoriapppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Convocatoriappp::factory(20)->create();
    }
}
