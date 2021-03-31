<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use App\Services\Post\CreatePost;
use App\Services\Post\DestroyPost;
use App\Services\Post\UpdatePost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;

class PostController extends Controller
{
    /**
     * Show Posts.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        return Jetstream::inertia()->render($request, 'Posts', [
            'posts' => Post::orderBy('id', 'desc')->get(),
            'categories' => Category::get(),
            'defaultCategory' => Category::first()->id,
        ]);
    }

    /**
     * Create a new Post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $post = app(CreatePost::class)->execute(
            $request->only([
                'title',
                'slug',
                'category_id',
                'social_media_description',
            ]) + [
                'post' => $request->input('post_note')
            ]
        );

        return back()->with(['flash' => [
            'post' => $post, ],
        ]);
    }

    /**
     * Update the given Post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $postId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $postId)
    {
        $post = app(UpdatePost::class)->execute(
            $request->only([
                'title',
                'slug',
                'category_id',
                'social_media_description',
            ]) + [
                'post_id' => $postId,
                'post' => $request->input('post_note'),
            ]
        );

        return back(303)->with(['flash' => [
            'post' => $post, ],
        ]);
    }

    /**
     * Delete the given Post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $postId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $postId)
    {
        app(DestroyPost::class)->execute([
            'post_id' => $postId,
        ]);

        return back(303);
    }
}
