<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user::index',['users' => ['John', 'Jane', 'Doe']]);
    }

    public function profile($id)
    {
        return view('user::profile', ['id' => $id]);
    }
}
 