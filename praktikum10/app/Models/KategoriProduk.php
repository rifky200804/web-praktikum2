<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoriProduk extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang terhubung dengan model ini
    protected $table = 'kategori_produk';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama',  // Nama kategori produk
    ];

    // Definisi relasi "has many" dengan model Produk
    public function produk()
    {
        return $this->hasMany(Produk::class,'kategori_produk_id','id');
    }

    public static function getAllKategoriProduk()
    {
        // return DB::table('produk')->get();

				// Mengambil semua data produk dan menggabungkannya dengan kategori produk terkait
        $alldata = DB::table('kategori_produk')
            ->select('*')
            ->get();
        return $alldata;
    }
}