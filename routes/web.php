<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes — Tugas Rutin 9 (Setup Laravel)
|--------------------------------------------------------------------------
| 3 route wajib (/, /about, /contact) mengirim array dinamis ke Blade view.
| Bonus: route parameter /hello/{nama}.
| Mini walkthrough MVC: /courses -> CourseController -> Course (Model) -> View.
*/

// 1. Halaman utama
Route::get('/', function () {
    return view('home', [
        'name'    => 'Nama Kamu', // TODO: ganti dengan namamu
        'courses' => ['HTML', 'CSS', 'JavaScript', 'PHP Native', 'MySQL & PDO', 'Laravel'],
    ]);
})->name('home');

// 2. Halaman about
Route::get('/about', function () {
    return view('about', [
        'title'    => 'Tentang Project Ini',
        'concepts' => [
            'MVC'      => 'Memisahkan Model (data), View (tampilan), dan Controller (alur request).',
            'Composer' => 'Package manager PHP, setara npm pada Node.js.',
            'Artisan'  => 'CLI Laravel untuk generate file dan menjalankan perintah.',
            'Blade'    => 'Template engine Laravel; {{ }} otomatis di-escape (aman dari XSS).',
            '.env'     => 'Konfigurasi rahasia per lingkungan, tidak di-commit ke Git.',
        ],
    ]);
})->name('about');

// 3. Halaman contact
Route::get('/contact', function () {
    return view('contact', [
        'channels' => [
            ['label' => 'Email',     'value' => 'nama@student.unimed.ac.id'], // TODO: ganti
            ['label' => 'GitHub',    'value' => 'github.com/username-kamu'],  // TODO: ganti
            ['label' => 'Kampus',    'value' => 'FMIPA — Universitas Negeri Medan'],
        ],
    ]);
})->name('contact');

// Bonus: route parameter
Route::get('/hello/{nama}', function (string $nama) {
    return view('hello', ['nama' => ucwords($nama)]);
})->where('nama', '[A-Za-z ]+')->name('hello');

// Mini walkthrough MVC: Route -> Controller -> Model -> View
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
