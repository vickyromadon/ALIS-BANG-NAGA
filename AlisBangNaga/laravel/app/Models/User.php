<?php

namespace App\Models;

use App\Models\Petisi;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'nim',
        'nama',
        'email',
        'namaPerguruanTinggi',
        'jenisKelamin',
        'tempatTanggalLahir',
        'agama',
        'jurusan',
        'alamat',
        'gambar',
        'jabatan',
        'provinsi',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public function getName()
    {
        return $this->nama;
    }

    public function getNameOrUsername()
    {
        return $this->getName() ?: $this->username;
    }

    public function petisis()
    {
        return $this->hasMany('App\Models\Petisi', 'user_id');
    }
    
    public function hasLikedPetisi(Petisi $petisi)
    {
        return (bool) $petisi->likes->where('user_id', $this->id)->count();
    }
}
