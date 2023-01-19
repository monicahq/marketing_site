<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     */
    public function index(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        $categories = Category::all();
        return view('blog')->withPosts($posts)->withCategories($categories);
    }

    public function post(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        $categories = Category::all();
        return view('post')->withPost($post)->withCategories($categories);
    }

    public function category(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts()->paginate(10);
        $categories = Category::all();
        return view('category')->withCategory($category)->withPosts($posts)->withCategories($categories);
    }
}
