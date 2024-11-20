<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama_produk',
        'kategori_id',
        'jumlah_terjual',
        'status',
        'dari_tanggal',
        'sampai_tanggal',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
