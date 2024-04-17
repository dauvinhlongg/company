<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    // public $timestamps = false;
    // protected $fillable = [
    //     'title', 'is_active','slide_url','content'
    // ];
    // public function index()
    // {
    //     $post = Post::with('category')->get();
    //     return view('post.index',compact('posts'));

    // }
    // public function categories(){
    //     return $this->belongsTo(Category::class);
    // }
    protected $table = 'posts';
    public $timestamps = false;
    protected $fillable = [
        'title','content'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}

