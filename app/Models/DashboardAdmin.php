<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelAdmin extends Model
{
    use HasFactory;
    protected $table = "tb-artikel";
    protected $fillable = [
        'artikel_id',
        'artiekl_image',
        'artikel_teks',
        'status-artikel'
    ];
}
