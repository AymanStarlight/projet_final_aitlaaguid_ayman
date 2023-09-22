<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'adminadmin',
        ])->assignRole('admin');
        Cart::create([
            'user_id' => $admin->id
        ]);
        $user = User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => 'useruser',
        ])->assignRole('user');
        Cart::create([
            'user_id' => $user->id
        ]);
        $webmaster = User::create([
            'name' => 'webmaster',
            'email' => 'webmaster@webmaster.com',
            'password' => 'webmasterwebmaster',
        ])->assignRole('webmaster');
        Cart::create([
            'user_id' => $webmaster->id
        ]);
    }
}
