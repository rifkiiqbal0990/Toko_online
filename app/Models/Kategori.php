<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\Laporan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "Kategories";
    protected $fillable = [
        'nama_kategori',
    ];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'kategori_id');
    }

    public function laporan()
    {
        return $this->hasMany(Laporan::class);
    }

}