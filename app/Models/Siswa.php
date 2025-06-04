<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nama','nis','gender','alamat','kontak','email','status_lapor_pkl'];

    public function pkls() {
        return $this->hasOne(Pkl::class);
    }
}