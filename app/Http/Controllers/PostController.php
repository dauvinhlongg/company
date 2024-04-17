<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\image;

class PostController extends Controller
{
    //
    // public function getPosts(){
    //     $listPosts = Post::all();
    //     return view('Post', compact('listPosts'));
    // }
    // public function index()
    // {
    //     $posts = Post::all(); // Lấy tất cả các bài viết từ database
    //     return view('post.index', compact('posts'));
    // }
    // public function show($id)
    // {
    //     $post = Post::find($id);
    //     return view('post.show', compact('post'));
    // }
    public function home()
    {
        $image = image::all();
        // Lấy danh sách các danh mục từ bảng 'categories'
        $categories = Category::with('posts')->get();

        // Truyền cả hai biến vào view
        return view('home', compact( 'categories','image'));
    }
    public function show($id)
    {
    // Lấy thông tin sản phẩm từ ID
    $post = Post::find($id);
    // Trả về view hiển thị chi tiết sản phẩm
    return view('post.show', ['post' => $post, 'title' => $post->title]);
    }
    

}