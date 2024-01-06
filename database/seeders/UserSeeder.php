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
        $users = [
            [
                'id'             => 1,
                'first_name'     => 'admin',
                'last_name'      => 'admin',
                'email'          => 'admin@admin.com',
                'phone_number'   => '12345',
                'password'       => bcrypt('12345'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
