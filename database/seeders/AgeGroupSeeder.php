<?php

namespace Database\Seeders;

use App\Models\AgeGroup;
use Illuminate\Database\Seeder;

class AgeGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('age_groups')->truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        \DB::table('age_groups')->insert(
            [
                'name' => 'All',
                'from' => '0',
                'to' => '100',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        \DB::table('age_groups')->insert(
            [
                'name' => '1 to 17',
                'from' => '1',
                'to' => '17',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        \DB::table('age_groups')->insert(
            [
                'name' => '18 to 30',
                'from' => '18',
                'to' => '30',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        \DB::table('age_groups')->insert(
            [
                'name' => '31 to 45',
                'from' => '31',
                'to' => '45',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        \DB::table('age_groups')->insert(
            [
                'name' => '45 to 60',
                'from' => '45',
                'to' => '60',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
