<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   public function index()
{
    /*$data = [
        ['username' => 'custumer-1', 'nama' => 'Pelanggan', 'password' => Hash::make('12345'), 'level_id' => 4],
        ];
        UserModel::insert($data); //tambakan data ke tabel _user      
        $user = UserModel::all(); //mengambil semua data dari tabel m_user
        return view('user', ['data' => $user]); //menampilkan data ke view user.blade.php*/

      // DB::statement('TRUNCATE TABLE m_user');
    }
}
