<?php

    namespace Database\Seeders;

    use App\Models\Illness;
    use App\Models\IllnessCategory;
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class IllnessCategorySeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            IllnessCategory::factory()->count(4)->create();
        }
    }
