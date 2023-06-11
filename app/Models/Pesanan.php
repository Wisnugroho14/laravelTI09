<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    //memanggil table yg akan dikelola
    protected $table = 'pesanan';
    //mendeklarasikan kolom yg ada di dalam table
    protected $fillable = [
        'tanggal',
        'nama_pemesan',
        'alamat_pemesan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'produk_id'
    ];
    public function produk(){
        return $this->belongsTo(Produk::class);
    }
}
