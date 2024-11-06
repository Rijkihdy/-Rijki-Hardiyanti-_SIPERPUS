<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelfs')->insert([
            'code' => 'B1001',
            'name' => 'Novel'
        ]);
        Book::create([
            'title' =>'Filosopi Gajar Terbang',
            'author' =>'GTA',
            'year' =>'2024',
            'publisher' =>'GAT',
            'city' =>'Cianjur',
            'cover' =>'placeholder.com/512px.png',
            'bookshelf_id' =>'1',

        ]);
    }
}
