<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            ['name' => 'HTML & CSS',    'description' => 'Struktur dan tampilan halaman web'],
            ['name' => 'JavaScript',    'description' => 'Interaktivitas di sisi browser'],
            ['name' => 'PHP Native',    'description' => 'Pemrograman server-side dasar'],
            ['name' => 'MySQL & PDO',   'description' => 'Database relasional dan CRUD aman'],
            ['name' => 'Laravel',       'description' => 'Framework PHP berbasis MVC'],
        ];

        foreach ($courses as $c) {
            // firstOrCreate: aman dijalankan berulang (tidak duplikat)
            Course::firstOrCreate(['name' => $c['name']], $c);
        }
    }
}
