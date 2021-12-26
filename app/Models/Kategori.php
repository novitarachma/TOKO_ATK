<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelanggan;

class Kategori extends Model
{
    // use HasFactory;
    protected $table="kategori";
    protected $fillable = ['nama_kategori'];

    public function pelanggan()
    {
        return $this->hasMany(Pelanggan::class);
    }
}
