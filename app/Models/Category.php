<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='categories';
    public $timestamps = false;
    protected $fillable = [
        'title', 'is_active'
    ];
    public function index()
    {
        $categories = Category::with('post')->get();
        return view('post.index',compact('categories'));
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }

}
