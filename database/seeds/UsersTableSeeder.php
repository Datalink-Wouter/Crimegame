<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserTimer;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        DB::table('user_timers')->insert([
            'user_id' => '1'
        ]);

        factory(User::class, 3)->make();
        factory(User::class, 50)->create()->each(function ($user) {
            $user->timers()->save(factory(UserTimer::class)->make());
        });
    }
}
