<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $fillable = [
        'judul',
        'kode_buku',
        'deskripsi',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'cover',
        'status',
    ];

public function kategori()
{
    return $this->belongsToMany(Kategori::class,'detail_kategori', 'buku_id', 'kategori_id');
}

public function pengarang()
{
    return $this->belongsTo(Pengarang::class,'pengarang_id');

}

public function penerbit()
{
    return $this->belongsTo(Penerbit::class,'penerbit_id');
}

}