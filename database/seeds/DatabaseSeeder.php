<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeUser')->insert([
            'type' => str_random(10)
        ]);

        DB::table('users')->insert([
            'name'           => 'Diego Gonzalez',
            'typeUserId'     => 1,
            'email'          => 'admin@admin.com',
            'password'       => bcrypt('123'),
            'remember_token' => str_random(10),
            'sex'            => 1,
            'birth'          => '1991-01-01',
        ]);

    }
}
