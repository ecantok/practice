<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Jika ingin melakukan mass assignment/ data apa saja yang ingin diisi sekaligus
    // protected $fillable = ['title', 'excerpt', 'body'];

    // kebalikan dari fillable (yang tidak boleh diisi)
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
