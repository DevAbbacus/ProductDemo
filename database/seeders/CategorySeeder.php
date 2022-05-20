<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


//        \App\Models\Category::factory(5)->create();

        DB::table('categories')->insert(
            [
                'name' => 'Category 1',
                'age_group_id' => '1,2,3,4,5',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        DB::table('categories')->insert(
            [
                'name' => 'Category 2',
                'age_group_id' => '1,2,3,4,5',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        DB::table('categories')->insert(
            [
                'name' => 'Category 3',
                'age_group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        DB::table('categories')->insert(
            [
                'name' => 'Category 4',
                'age_group_id' => '1,2,3,4,5',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        DB::table('categories')->insert(
            [
                'name' => 'Category 5',
                'age_group_id' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        DB::table('categories')->insert(
            [
                'name' => 'Category 6',
                'age_group_id' => '1,2,3,4,5',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
