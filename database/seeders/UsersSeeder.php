<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Vityasri Ramachendren',
            'email' => 'Vityasri31@gmail.com',
            'password' => bcrypt('12345678'),
            'userLevel' => '0',
            'userType' => 'Supervisor',
        ]);

        $volunteers = [
            [
                'name' => 'Jane Volunteer',
                'email' => 'volunteer1@example.com',
                'password' => bcrypt('password123'),
                'userLevel' => '1',
                'userType' => 'Volunteer',
            ],
            [
                'name' => 'Joel Cruickshank Sr.',
                'email' => 'volunteer2@example.net',
                'password' => bcrypt('password123'),
                'userLevel' => '1',
                'userType' => 'Volunteer',
            ],
            
        ];

        DB::table('users')->insert($volunteers);
    }
}
