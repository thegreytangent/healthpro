<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Barangay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barangay::factory()->has(Address::factory())->count(4)->create();
    }
}
