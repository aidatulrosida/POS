<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriModel extends Model
{
    protected $table = 'm_kategori';
    protected $primaryKey = 'id'; // pastikan ini sesuai struktur tabel

    protected $fillable = ['nama_kategori', 'deskripsi'];

    public function barang(): HasMany
    {
        // Foreign key di tabel barang adalah kategori_id
        // Local key di kategori adalah id
        return $this->hasMany(BarangModel::class, 'kategori_id', 'id');
    }
}
