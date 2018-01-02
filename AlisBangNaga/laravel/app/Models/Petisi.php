<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petisi extends Model
{
    protected $table = 'petisis';

    protected $fillable = [
        'judul',
        'body',
        'gambar',
    ];

    public function getJudul()
    {
        return $this->judul;
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    
    public function likes()
    {
        return $this->morphMany('App\Models\Like', 'likeable');
    }
}