<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Populer extends Model
{
    use HasFactory;

    protected $table = 'populer';
    protected $fillable = [
        'judul_buku',
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'judul_buku');
    }
}
