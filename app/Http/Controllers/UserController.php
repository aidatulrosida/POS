<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
{
    // Tambah data user baru jika belum ada
    $data = [
        'level_id' => 2,
        'username' => 'manager_tiga',
        'name' => 'Manager 3',
        'password' => Hash::make('12345')
    ];
    
    UserModel::create($data);
    // Ambil semua data dari tabel m_user
    $user = UserModel::all();
    return view('user', ['data' => $user]);
}
}