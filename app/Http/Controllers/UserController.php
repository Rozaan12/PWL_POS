<?php

namespace App\Http\Controllers;

use app\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::all(); // mengambil semua data di tabel user
        return view ('user',['data' => $user]);
    }
}
