<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            [
                'name' => 'admin',
                'email' => 'admin@laracamp.com',
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'password' => bcrypt('pwadmin123'),
                'is_admin' => true,
            ]
        ];

        foreach ($admin as $key => $user) {
            User::create($user);
        }
    }
}
