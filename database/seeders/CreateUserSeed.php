<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //
        $password = Hash::make('admin12345');
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@ics-inventory.herokuapp.com',
                'role' => 1,
                'password' => $password,
            ],
            [
                'name' => 'Staff',
                'email' => 'staff@ics-inventory.herokuapp.com',
                'role' => 2,
                'password' => $password,
            ],
           
        ];

        foreach ($user as $value) {
            User::create($value);
        }

        // $faker = \Faker\Factory::create();
        // for ($i = 0; $i < 5; $i++) {
        //     User::create([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'password' => $password,
        //         'Role' => \mt_rand(1, 2)
        //     ]);
        // }
    }
}
