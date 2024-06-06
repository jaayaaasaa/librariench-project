<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pengembalian';
    protected $fillable = [
        'tanggal_pengembalian',
        'denda',
        'peminjaman_id',
        'users_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'peminjaman_id');
    }
    

    // public function buku()
    // {
    //     return $this->belongsToMany(Buku::class, 'detail_pengembalian', 'pengembalian_id', 'buku_id');
    // }

    protected static function boot()
    {
        parent::boot();

        static::deleted(function ($pengembalian) {
            // Hapus peminjaman terkait
            $pengembalian->peminjaman()->delete();
        });
    }
}
