<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    protected $fillable = ['judul','deskripsi','foto','url_video','id_kategori'];

    use HasFactory;
    public function kategori(){
        return $this->belongsToMany(kategori::class,'id_kategori');

    }
    public function genre(){
        return $this->belongsToMany(genre::class, 'genre_films','id_film','id_genre');
    }
    public function aktor(){
        return $this->belongsToMany(aktor::class, 'aktor_films','id_film','id_aktor');
    }
}
