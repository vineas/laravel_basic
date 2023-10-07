<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; // Menyatakan nama tabel yang terkait dengan model ini
    protected $fillable = ['name', 'price', 'stock']; // Kolom-kolom yang dapat diisi (fillable) oleh pengguna

    // Definisi hubungan model jika diperlukan, misalnya:
    // public function orders() {
    //     return $this->hasMany(Order::class);
    // }

    // Definisi metode atau logika bisnis lainnya jika diperlukan
    // public function calculateTotalPrice() {
    //     return $this->price * $this->quantity;
    // }
}
