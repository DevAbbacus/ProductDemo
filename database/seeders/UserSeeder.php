<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $users = [
            [
                'name' => 'Ryan VonRueden',
                'email' => 'olockman@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1998-05-01',
                'age_group_id' => '3',
            ],
            [
                'name' => 'Eloise Leffler',
                'email' => 'rhermann@example.org',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1985-05-20',
                'age_group_id' => '4',
            ],
            [
                'name' => 'ANryan VonRueden',
                'email' => 'olockman1@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1985-05-20',
                'age_group_id' => '4',
            ],
            [
                'name' => 'ANryan2 VonRueden',
                'email' => 'olockman2@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1995-05-20',
                'age_group_id' => '3',
            ],
            [
                'name' => 'ANryan3 VonRueden',
                'email' => 'olockman3@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1994-05-20',
                'age_group_id' => '3',
            ],
            [
                'name' => 'ANryan4 VonRueden',
                'email' => 'olockman4@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '2007-05-20',
                'age_group_id' => '2',
            ],
            [
                'name' => 'ANryan5 VonRueden',
                'email' => 'olockman5@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '2007-09-20',
                'age_group_id' => '2',
            ],
            [
                'name' => 'ANryan6 VonRueden',
                'email' => 'olockman6@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '2009-09-10',
                'age_group_id' => '2',
            ],
            [
                'name' => 'ANryan7 VonRueden',
                'email' => 'olockman7@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '2009-09-10',
                'age_group_id' => '2',
            ],
            [
                'name' => 'ANryan8 VonRueden',
                'email' => 'olockman8@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '2009-06-15',
                'age_group_id' => '2',
            ],
            [
                'name' => 'ANryan9 VonRueden',
                'email' => 'olockman9@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1990-06-15',
                'age_group_id' => '4',
            ],
            [
                'name' => 'qNryan9 VonRueden',
                'email' => 'qolockman9@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1990-06-19',
                'age_group_id' => '4',
            ],
            [
                'name' => 'qNryan8 VonRueden',
                'email' => 'qolockman8@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1989-06-19',
                'age_group_id' => '4',
            ],
            [
                'name' => 'qNryan7 VonRueden',
                'email' => 'qolockman7@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1989-09-19',
                'age_group_id' => '4',
            ],
            [
                'name' => 'qNryan6 VonRueden',
                'email' => 'qolockman6@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1989-07-19',
                'age_group_id' => '4',
            ],
            [
                'name' => 'qNryan5 VonRueden',
                'email' => 'qolockman5@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1988-07-19',
                'age_group_id' => '4',
            ],
            [
                'name' => 'qNryan6 VonRueden',
                'email' => 'qolockman6@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1987-07-19',
                'age_group_id' => '4',
            ],
            [
                'name' => 'qNryan5 VonRueden',
                'email' => 'qolockman5@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1989-07-19',
                'age_group_id' => '4',
            ],
            [
                'name' => 'qNryan4 VonRueden',
                'email' => 'qolockman4@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1989-09-19',
                'age_group_id' => '4',
            ],
            [
                'name' => 'qNryan3 VonRueden',
                'email' => 'qolockman3@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1989-02-19',
                'age_group_id' => '4',
            ],
            [
                'name' => 'qNryan2 VonRueden',
                'email' => 'qolockman2@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1989-02-16',
                'age_group_id' => '4',
            ],
            [
                'name' => 'qNryan1 VonRueden',
                'email' => 'qolockman1@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1990-02-16',
                'age_group_id' => '4',
            ],
            [
                'name' => 'qNryan0 VonRueden',
                'email' => 'qolockman0@example.net',
                'email_verified_at' => now(),
                'password' => Hash::make('User@123'),
                'dob' => '1990-02-19',
                'age_group_id' => '4',
            ]
        ];
    }
}
