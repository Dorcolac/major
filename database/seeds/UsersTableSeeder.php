<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(['nickname' => 'admin', 'name' => 'admin', 'email' => 'nikola.starcevic@hotmail.rs', 'password' => bcrypt('admin123')]);

        $user->user_level = 1;
        $user->save();

        factory(App\User::class, 30)->create();
    }
}
