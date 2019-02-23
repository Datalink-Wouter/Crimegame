<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserTimer;
use App\Models\UserResource;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* add main user for testing */
        $mainUser = User::create([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        $mainUser->timers()->save(factory(UserTimer::class)->make());
        $mainUser->resources()->save(factory(UserResource::class)->make());

        /* add 50 other random users */
        factory(User::class, 3)->make();
        factory(User::class, 50)->create()->each(function ($user) {
            $user->timers()->save(factory(UserTimer::class)->make());
            $user->resources()->save(factory(UserResource::class)->make());
        });
    }
}
