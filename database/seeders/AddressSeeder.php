<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Barangay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::factory()->has(Barangay::factory())->count(4)->create();
    }
}
