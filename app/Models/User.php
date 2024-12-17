<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $primaryKey = 'id_user'; // Set primary key

    // protected $table = 'users';

    protected $guarded = [];

    protected $fillable = [
        'name',
        'username',
        'email',
        'password'
    ];
    // protected $fillable = [
    //     'id_user',
    //     'nama_user',
    //     'username',
    //     'password',
    //     'email',
    //     'no_hp',
    //     'wa',
    //     'pin',
    //     'id_jenis_user',
    //     'status_user',
    //     'delete_mark',
    //     'create_by',
    //     'create_date',
    //     'update_by',
    //     'update_date',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function jenisUser()
    {
        return $this->belongsTo(JenisUser::class, 'id_jenis_user');
    }

    public function isAdmin(): bool
    {
        return $this->jenisUser->jenis_user === 'admin';
    }

    public function isMahasiswa(): bool
    {
        return $this->jenisUser->jenis_user === 'mahasiswa';
    }

    public function isUser(): bool
    {
        return $this->jenisUser->jenis_user === 'user';
    }

    // Uncomment if needed
    // public function isAnggota(): bool
    // {
    //     return $this->role === 'anggota';
    // }
}
