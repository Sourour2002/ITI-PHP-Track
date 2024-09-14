<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::insert([
            [
                'name' => 'Introduction to Computer Science',
                'date' => '2024-09-01',
                'price' => 50.00,
                'description' => 'Basic concepts of computer science including algorithms, programming, and data structures.',
            ],
            [
                'name' => 'Data Structures and Algorithms',
                'date' => '2024-09-15',
                'price' => 100.00,
                'description' => 'In-depth exploration of data structures, algorithms, and their efficiency.',
            ],
            [
                'name' => 'Operating Systems',
                'date' => '2024-09-20',
                'price' => 80.00,
                'description' => 'Concepts and design of operating systems, including concurrency, memory management, and file systems.',
            ],
            [
                'name' => 'Database Management Systems',
                'date' => '2024-10-01',
                'price' => 90.00,
                'description' => 'An introduction to databases, SQL, relational models, and database management systems.',
            ],
            [
                'name' => 'Computer Networks',
                'date' => '2024-10-10',
                'price' => 110.00,
                'description' => 'Understanding the fundamentals of computer networking, including protocols, architecture, and security.',
            ],
            [
                'name' => 'Web Development with PHP',
                'date' => '2024-09-25',
                'price' => 75.00,
                'description' => 'Developing dynamic websites using PHP, HTML, CSS, and JavaScript.',
            ],
            [
                'name' => 'Artificial Intelligence',
                'date' => '2024-10-15',
                'price' => 120.00,
                'description' => 'Fundamentals of AI, including machine learning, natural language processing, and robotics.',
            ],
            [
                'name' => 'Cybersecurity Basics',
                'date' => '2024-09-30',
                'price' => 95.00,
                'description' => 'Introduction to cybersecurity, including cryptography, network security, and ethical hacking.',
            ]
        ]);
    }
}
