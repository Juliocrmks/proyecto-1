<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([
            'name' => 'wood',
            'price' => 100,
            'amount' => 40
        ]);
        Material::create([
            'name' => 'glass',
            'price' => 80,
            'amount' => 60
        ]);
        Material::create([
            'name' => 'metal',
            'price' => 150,
            'amount' => 50
        ]);
        Material::create([
            'name' => 'plywood',
            'price' => 50,
            'amount' => 40
        ]);
    }
}
