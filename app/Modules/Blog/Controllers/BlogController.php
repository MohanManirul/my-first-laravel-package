<?php

namespace App\Modules\Blog\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog::index', ['posts' => ['Post 1', 'Post 2', 'Post 3']]);
    }

    public function post($id)
    {
        return view('blog::post', ['id' => $id, 'title' => 'Sample Post Title']);
    }

}
