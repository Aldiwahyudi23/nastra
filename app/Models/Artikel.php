<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';

    public function kategori()
    {
        return $this->belongsTo(KategoriArtikel::class ,'kategori_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class ,'created_by','id');
    }
}
