<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            ['name' => 'Aerobics', 'met_value' => 9.5],
            ['name' => 'Circuits', 'met_value' => 4.3],
            ['name' => 'Cycling', 'met_value' => 7.5],
            ['name' => 'Rowing', 'met_value' => 12],
            ['name' => 'Weights', 'met_value' => 5],
            ['name' => 'Yoga', 'met_value' => 2.5],

        ];
        foreach ($activities as $activity) {
            Activity::firstOrCreate(['name' => $activity['name']], $activity);
        }
    }
}
