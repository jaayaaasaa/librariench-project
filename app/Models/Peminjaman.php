<?php

namespace App\Models;

use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $fillable = [
        'tanggal_pinjam',
        'tanggal_kembali',
        'users_id',
    ];

public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
        


public function buku(){
    return $this->belongsToMany(Buku::class, 'detail_peminjaman','peminjaman_id', 'buku_id');
}    

// public function status(){
//     return $this->belongsTo(Anggota::class, 'status');
// }
        
    
}
