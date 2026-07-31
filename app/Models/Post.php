<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'my_posts';
    protected $primaryKey = 'my_id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'judul',
        'isi_berita',
        'penulis',
    ];
}