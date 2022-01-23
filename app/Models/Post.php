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
    protected $with = ['category', 'author'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters)
    {
        
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     //SELECT * FROM posts WHERE title LIKE %s'search'%
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //                 ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // } 

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where(function($query) use ($search){
                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use($category){
                $query->where('slug', $category);
            } );
        });
    }
}
