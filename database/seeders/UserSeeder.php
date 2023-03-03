<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Assign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // ini user yang statusnya superadmin 
        $superadmin = User::create([
            'name' => 'rifqi',
            'email' => 'rifqi@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $superadmin = User::create([
            'name' => 'komisariat',
            'email' => 'komisariat@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        // ini user yang statusnya admin 
        $admin = User::create([
            'name' => 'teknik',
            'email' => 'teknik@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $admin = User::create([
            'name' => 'hukum',
            'email' => 'hukum@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        // ini user yang statusnya kader/user 
        $user = User::create([
            'name' => 'kader1',
            'email' => 'kader1@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user = User::create([
            'name' => 'kader2',
            'email' => 'kader2@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        // ini user yang statusnya guest/pengunjung
        $guest = User::create([
            'name' => 'guest1',
            'email' => 'guest1@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $guest = User::create([
            'name' => 'guest2',
            'email' => 'guest2@gmail.com',
            'password' => bcrypt('12345678')
        ]);



        $superadmin->assignRole('superadmin');
        $admin->assignRole('admin');
        $user->assignRole('user');
        $guest->assignRole('guest');
    }
}
