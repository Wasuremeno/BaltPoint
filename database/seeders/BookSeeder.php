<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{

    public function run(): void
    {
        $categories = [
            ['name' => 'PHP Programming', 'slug' => 'php-programming'],
            ['name' => 'JavaScript', 'slug' => 'javascript'],
            ['name' => 'Databases', 'slug' => 'databases'],
            ['name' => 'Linux', 'slug' => 'linux'],
            ['name' => 'Web Development', 'slug' => 'web-development'],
            ['name' => 'Software Engineering', 'slug' => 'software-engineering'],
            ['name' => 'Networking', 'slug' => 'networking'],
            ['name' => 'Mathematics', 'slug' => 'mathematics'],
        ];

        foreach ($categories as $category){
            Category::create($category);
        }


        $books = [
            [
                'title' => 'Learning PHP, MySQL, JavaScript, CSS & HTML5',
                'author' => 'Robin Nixon',
                'publication_year' => 2021,
                'category_id' => 1,
                'description' => 'A comprehensive guide to web development with PHP and related technologies.'
            ],
            [
                'title' => 'THE LINUX COMMAND LINE a complete introduction',
                'author' => 'William E. Shorts, jr.',
                'publication_year' => 2019,
                'category_id' => 4,
                'description' => 'Complete guide to Linux command line for beginners and professionals.'
            ],
            [
                'title' => 'PRACTICAL PACKET ANALYSIS using wireshark to solve real-world network problems',
                'author' => 'CHRIS SANDERS',
                'publication_year' => 2017,
                'category_id' => 7,
                'description' => 'Learn to use Wireshark for network troubleshooting and analysis.'
            ],
            [
                'title' => 'Full-Stack React, TypeScript, and Node: Build Cloud-ready Web Applications',
                'author' => 'David Choi',
                'publication_year' => 2020,
                'category_id' => 2,
                'description' => 'Build modern full-stack applications with React, TypeScript, and Node.js.'
            ],
            [
                'title' => 'Designing Data-Intensive Applications',
                'author' => 'Martin Kleppmann',
                'publication_year' => 2017,
                'category_id' => 3,
                'description' => 'The big ideas behind reliable, scalable, and maintainable systems.'
            ],
            [
                'title' => 'AJAX and PHP: Building Responsive Web Applications',
                'author' => 'Cristian Darie',
                'publication_year' => 2006,
                'category_id' => 5,
                'description' => 'Learn to build dynamic web applications with AJAX and PHP.'
            ],
            [
                'title' => 'JavaScript The Definitive Guide',
                'author' => 'David Flanagan',
                'publication_year' => 2020,
                'category_id' => 2,
                'description' => 'The comprehensive JavaScript reference for programmers.'
            ],
            [
                'title' => 'Design Patterns: Elements of Reusable Object-Oriented Software',
                'author' => 'John Vlissides',
                'publication_year' => 1994,
                'category_id' => 6,
                'description' => 'Classic book on software design patterns.'
            ],
            [
                'title' => 'Learning SQL Generate, Manipulate, and Retrieve Data',
                'author' => 'Alan Beaulieu',
                'publication_year' => 2020,
                'category_id' => 3,
                'description' => 'Comprehensive guide to SQL for data manipulation and retrieval.'
            ],
            [
                'title' => 'Essential System Administration pocket reference',
                'author' => 'Æleen Frisch',
                'publication_year' => 2002,
                'category_id' => 4,
                'description' => 'Quick reference for system administrators.'
            ],
            [
                'title' => 'CLEAN CODE a handbook of agile software craftsmanship',
                'author' => 'Robert C. Martin',
                'publication_year' => 2008,
                'category_id' => 6,
                'description' => 'Learn to write clean, maintainable code.'
            ],
            [
                'title' => 'Version Control with Git 2nd edition',
                'author' => 'Jon Loeliger & Matthew McCullough',
                'publication_year' => 2012,
                'category_id' => 6,
                'description' => 'Master Git for version control in software development.'
            ],
            [
                'title' => 'NO BULLSHIT guide to MATH & PHYSICS',
                'author' => 'Ivan Savov',
                'publication_year' => 2010,
                'category_id' => 8,
                'description' => 'Straightforward guide to essential math and physics concepts.'
            ],
            [
                'title' => 'Database Internals A deep-dive into How distributed Data Systems Works',
                'author' => 'Alex Petrov',
                'publication_year' => 2019,
                'category_id' => 3,
                'description' => 'Deep dive into database internals and distributed systems.'
            ],
            [
                'title' => 'Linux Bible The comprehensive, tutorial resource 10th edition',
                'author' => 'Christopher Negus',
                'publication_year' => 2020,
                'category_id' => 4,
                'description' => 'Comprehensive guide to Linux administration and usage.'
            ],
        ];

        foreach ($books as $book){
            Book::create($book);
        }
    }
}
