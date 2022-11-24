<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    protected $fillable = [
        'siswa_id',
        'jenis_id',
        'deskripsi'
    ];
    protected $table ='kontak';
    // public function siswa(){
    //     return $this->belongsTo('app\models\siswa' , 'id_siswa');
    // }
    // public function jeniskontak(){
    //     return $this->hasMany('app\models\siswa' , 'id_jenis');
    // }
}