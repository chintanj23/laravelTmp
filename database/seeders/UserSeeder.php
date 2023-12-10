<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'Admin',
                'username'=>'AdminUser',
                'email' => 'admin@mail.com',
                'password'=> Hash::make('Test123'),
                'role'=>'admin',
                'status'=>'active'
            ],
            [
                'name'=>'User',
                'username'=>'user',
                'email' => 'user@mail.com',
                'password'=> Hash::make('Test123'),
                'role'=>'user',
                'status'=>'active'
            ],
            [
                'name'=>'Agent',
                'username'=>'AgentUser',
                'email' => 'agent@mail.com',
                'password'=> Hash::make('Test123'),
                'role'=>'agent',
                'status'=>'active'
            ]
            ]);
    }
}
