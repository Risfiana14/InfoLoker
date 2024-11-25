<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisUser extends Model
{
    use HasFactory;

    protected $table = 'jenis_user';
    protected $primaryKey = 'id_jenis_user';
    protected $fillable = [
        'jenis_user', 
        'create_by', 
        'delete_mark', 
        'update_by',
    ];


    public function users()
    {
        return $this->hasMany(User::class, 'ID_JENIS_USER');
    }
}