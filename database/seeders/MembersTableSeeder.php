<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Member;

class MembersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('members')->insert([
            'name' => 'Ahmad bin Abdullah',
            'ic_number' => '900101-14-5678',
            'address' => '123, Jalan Merdeka, Taman Maju, 68000 Ampang, Selangor',
            'contact_info' => 'ahmad@gmail.com',
        ]);

        Member::factory()->count(10)->create();
    }
}
