<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Borrowed;
use App\Models\Book;
use App\Models\Member;


class BorrowedsTableSeeder extends Seeder
{
    public function run()
    {
        $book = Book::first();  // Get the first available book
        $member = Member::first();  // Get the first available member

        if ($book && $member) {
            Borrowed::create([
                'book_id' => $book->id,
                'member_id' => $member->id,
                'borrow_date' => now()->format('Y-m-d'),
                'return_date' => null
            ]);

            Borrowed::factory()->count(10)->create();
        }
    }
}