<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Pelanggan extends Model
{
    //use HasFactory;
    protected $fillable = ['nama','alamat','no_telepon','kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
