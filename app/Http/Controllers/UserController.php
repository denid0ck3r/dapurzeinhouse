<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user', [
            "title" => "Users",
            "halaman" => "Users",
            "users" => \App\Models\User::all()
        ]);
    }
}
