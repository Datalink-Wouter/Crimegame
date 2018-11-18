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
            'earn_xp_factor' => '10',
            'earn_cash_factor' => '10',
            'cooldown' => '30',
        ]);

        DB::table('crimes')->insert([
            'type' => 1,
            'name' => 'Second crime',
            'earn_xp_factor' => '20',
            'earn_cash_factor' => '20',
            'cooldown' => '30',
        ]);

        DB::table('crimes')->insert([
            'type' => 1,
            'name' => 'Third crime',
            'earn_xp_factor' => '30',
            'earn_cash_factor' => '30',
            'cooldown' => '30',
        ]);
    }
}
