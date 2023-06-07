<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang terhubung dengan model ini
    protected $table = 'produk';
    public $timestamps = false;
    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'kode',            
        'nama',            
        'harga_jual',      
        'harga_beli',      
        'stok',             
        'min_stok',        
        'deskripsi',        
        'kategori_produk_id',
    ];

    // Definisi relasi "belongs to" dengan model KategoriProduk
    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class,'kategori_produk_id','id');
    }

		// Bikin fungsi nampilin semua data
		public static function getAllProduk()
    {
        // return DB::table('produk')->get();

				// Mengambil semua data produk dan menggabungkannya dengan kategori produk terkait
        $alldata = DB::table('produk')
            ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();
        return $alldata;
    }
}