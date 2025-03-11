<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'user_id'; // Primary key yang benar
    public $timestamps = false; // Karena kolom created_at & updated_at NULL

    protected $fillable = ['user_id', 'level_id', 'username', 'name', 'password'];
}
