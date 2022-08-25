<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    Public function index(Request $r) {
        $users = User::all();
        return $users;
    }
}
