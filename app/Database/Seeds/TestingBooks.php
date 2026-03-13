<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestingBooks extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'description' => 'A novel set in the Roaring Twenties, exploring themes of wealth, love, and the American Dream.',
                'published_year' => 1925,
                'path' => 'books/the-great-gatsby.pdf',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'description' => 'A story of racial injustice and moral growth in the Deep South during the 1930s.',
                'published_year' => 1960,
                'path' => 'books/to-kill-a-mockingbird.pdf',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'description' => 'A dystopian novel about totalitarianism and surveillance in a future society.',
                'published_year' => 1949,
                'path' => 'books/1984.epub',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Only mandatory fields',
                'path' => 'books/only-mandatory-fields.pdf',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        foreach ($data as $book) {
            $this->db->table('books')->insert($book);
        }
    }
}
