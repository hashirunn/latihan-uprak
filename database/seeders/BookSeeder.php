<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'matinya burung-burung hasby',
            'author' => 'bang ghoz',
            'year' => 2023,
            'publisher' => 'labtif',
            'city' => 'cianjur',
            'bookshelf_id' => 1,
            'created_at' => now()
        ]);

        Book::create([
            'title' => 'Pemrograman Web Lanjut 2026',
            'author' => 'Finsa Nurpandi, S.T., M.Kom.',
            'year' => 2026,
            'publisher' => 'labtif',
            'city' => 'cianjur',
            'bookshelf_id' => 2,
            'created_at' => now()
        ]);

        Book::create([
            'title' => 'Belalang belalang apa yang kupu-kupu',
            'author' => 'melesene',
            'year' => 2026,
            'publisher' => 'labtif',
            'city' => 'cianjur',
            'bookshelf_id' => 3,
            'created_at' => now()
        ]);
    }
}
