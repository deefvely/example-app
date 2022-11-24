<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model 
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'email',
        'foto',
        'about'
    ];
    protected $table = 'siswa';
    // public function kontak(){
    //     return $this->hasMany('App\Models\Kontak' , 'id_siswa');
    // }
    public function kontak(){
        return $this->belongsToMany('App\Models\JenisKontak')->withPivot('deskripsi');
    }
    public function project(){
        return $this-hasMany('App\Models\Project' , 'id_siswa');
    }  
}