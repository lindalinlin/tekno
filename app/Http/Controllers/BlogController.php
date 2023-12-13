<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        // Logic untuk menampilkan halaman blog
        return view('blog'); // Menggunakan tampilan dengan nama 'blog.index'
    }
}
