<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class UserModel extends Model
{
    use HasFactory;
    protected $table = 'm_user'; //Mendifinisikan nama tabel yang digunakan oleh model
    protected $primaryKey = 'user_id'; //Mendifinisikan primary key dari tabel
}
