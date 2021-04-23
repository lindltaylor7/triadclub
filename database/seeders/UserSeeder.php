<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name'=>'Jair Pariona Leonardo',
            'email'=>'jairpleo@gmail.com',
            'password'=> bcrypt('12345678')
        ]);

        $useradmin->roles()->attach(1);

        $users = User::factory(99)->create();

        foreach ($users as $user) {
            $user->roles()->attach(2);
        }

    }
}
