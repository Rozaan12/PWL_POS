<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'm_user';        //mendefinisikan nama table yang digunakan untuk model ini
    protected $primarykey = 'user_id';  //mendefinisikan primary key yang di gunakan di tabel ini
}
