<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal'];

    public function user()
    {
        // 
        return $this->belongsTo('App\User','user_id','id');
    }

    public function pesanan_detail()
    {
        // has many = one to many
        return $this->hasMany('App\PesananDetail','pesanan_id', 'id');
    }
}
