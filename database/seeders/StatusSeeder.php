<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name' => 'Ordered',
            'description' => 'When a material is ordered, and the sales executive enters it into the system'
        ]);
        Status::create([
            'name' => 'In process',
            'description' => 'when the order is in stock, and is being prepared to go on route or, failing that, when it is not in stock and must be purchased from an external supplier.'
        ]);
        Status::create([
            'name' => 'In route',
            'description' => 'when the order has been routed for distribution.'
        ]);
        Status::create([
            'name' => 'Delivered',
            'description' => ' when the order has been delivered to the customer\'s premises.'
        ]);
    }
}
