<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lamaran extends Model
{
    protected $table = 'lamarans';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function loker()
    {
        return $this->belongsTo(Loker::class);
    }

}
