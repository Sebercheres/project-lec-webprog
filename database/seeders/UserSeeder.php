<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
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
        User::create([
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password'=> bcrypt('admin123'),
            'date_of_birth' => '2001-6-27',
            'avatar' => 'images/admin.jpg',
            'role'=>'admin',
        ]);

        User::create([
            'email' => 'user@gmail.com',
            'username' => 'user',
            'password'=> bcrypt('user123'),
            'date_of_birth' => '2001-6-27',
            'avatar' => 'images/user.jpg',
            'role'=>'user',
        ]);
    }
}
