<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Создаем категории только если их нет
        $categories = [
            ['name' => 'PHP Programming', 'slug' => 'php-programming'],
            ['name' => 'JavaScript', 'slug' => 'javascript'],
            ['name' => 'Databases', 'slug' => 'databases'],
            ['name' => 'Linux', 'slug' => 'linux'],
            ['name' => 'Web Development', 'slug' => 'web-development'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }

        // Создаем книги только если таблица пуста
        if (Book::count() === 0) {
            $books = [
                [
                    'title' => 'Learning PHP, MySQL, JavaScript, CSS & HTML5',
                    'author' => 'Robin Nixon',
                    'publication_year' => 2021,
                    'category_id' => Category::where('slug', 'php-programming')->first()->id,
                    'description' => 'A comprehensive guide to web development'
                ],
                [
                    'title' => 'THE LINUX COMMAND LINE a complete introduction',
                    'author' => 'William E. Shorts, jr.',
                    'publication_year' => 2019,
                    'category_id' => Category::where('slug', 'linux')->first()->id,
                    'description' => 'Complete guide to Linux command line'
                ],
                [
                    'title' => 'PRACTICAL PACKET ANALYSIS using wireshark',
                    'author' => 'CHRIS SANDERS',
                    'publication_year' => 2017,
                    'category_id' => Category::where('slug', 'databases')->first()->id,
                    'description' => 'Learn to use Wireshark for network troubleshooting'
                ],
                [
                    'title' => 'Full-Stack React, TypeScript, and Node',
                    'author' => 'David Choi',
                    'publication_year' => 2020,
                    'category_id' => Category::where('slug', 'javascript')->first()->id,
                    'description' => 'Build modern full-stack applications'
                ],
                [
                    'title' => 'Designing Data-Intensive Applications',
                    'author' => 'Martin Kleppmann',
                    'publication_year' => 2017,
                    'category_id' => Category::where('slug', 'databases')->first()->id,
                    'description' => 'Reliable, scalable, and maintainable systems'
                ],
                [
                    'title' => 'AJAX and PHP: Building Responsive Web Applications',
                    'author' => 'Cristian Darie',
                    'publication_year' => 2006,
                    'category_id' => Category::where('slug', 'php-programming')->first()->id,
                    'description' => 'Build dynamic web applications with AJAX and PHP'
                ],
                [
                    'title' => 'JavaScript The Definitive Guide',
                    'author' => 'David Flanagan',
                    'publication_year' => 2020,
                    'category_id' => Category::where('slug', 'javascript')->first()->id,
                    'description' => 'The comprehensive JavaScript reference'
                ],
                [
                    'title' => 'Design Patterns: Elements of Reusable Object-Oriented Software',
                    'author' => 'John Vlissides',
                    'publication_year' => 1994,
                    'category_id' => Category::where('slug', 'web-development')->first()->id,
                    'description' => 'Classic book on software design patterns'
                ],
                [
                    'title' => 'Learning SQL Generate, Manipulate, and Retrieve Data',
                    'author' => 'Alan Beaulieu',
                    'publication_year' => 2020,
                    'category_id' => Category::where('slug', 'databases')->first()->id,
                    'description' => 'Comprehensive guide to SQL'
                ],
                [
                    'title' => 'CLEAN CODE a handbook of agile software craftsmanship',
                    'author' => 'Robert C. Martin',
                    'publication_year' => 2008,
                    'category_id' => Category::where('slug', 'web-development')->first()->id,
                    'description' => 'Learn to write clean, maintainable code'
                ],
            ];

            foreach ($books as $book) {
                Book::create($book);
            }
        }
    }
}