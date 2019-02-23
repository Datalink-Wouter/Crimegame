<?php

use Illuminate\Database\Seeder;

class CrimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crimes')->insert([
            'type' => 1,
            'name' => 'First crime',
            'earn_xp' => '10',
            'earn_cash' => '10',
        ]);

        DB::table('crimes')->insert([
            'type' => 1,
            'name' => 'Second crime',
            'earn_xp' => '20',
            'earn_cash' => '20',
        ]);

        DB::table('crimes')->insert([
            'type' => 1,
            'name' => 'Third crime',
            'earn_xp' => '30',
            'earn_cash' => '30',
        ]);
    }
}
