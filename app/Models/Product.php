<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; // Nama tabel
    protected $fillable = ['nama', 'harga', 'gambar', 'deskripsi'];

}
