<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fantasi extends Model
{
    use HasFactory;

    protected $table = 'fantasi';
    protected $fillable = [
        'judul_buku',
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'judul_buku');
    }
}
