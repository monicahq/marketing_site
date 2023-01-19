<?php

namespace App\Services\Post;

use App\Models\Post;
use App\Models\Category;
use App\Services\BaseService;

class UpdatePost extends BaseService
{
    /**
     * Get the validation rules that apply to the service.
     *
     * @param array $data
     * @return array
     */
    public function rules(array $data)
    {
        return [
            'post_id' => 'required|integer|exists:posts,id',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'post' => 'required|string|max:16777215',
            'category_id' => 'required|integer|exists:categories,id',
            'social_media_description' => 'required|string|max:255',
        ];
    }

    /**
     * Update a post.
     *
     * @param array $data
     * @return Post
     */
    public function execute(array $data): Post
    {
        $this->validate($data);

        $post = Post::findOrFail($data['post_id']);

        Category::findOrFail($data['category_id']);

        $post->update([
            'title' => $this->nullOrValue($data, 'title'),
            'slug' => $this->nullOrValue($data, 'slug'),
            'post' => $this->nullOrValue($data, 'post'),
            'category_id' => $this->nullOrValue($data, 'category_id'),
            'social_media_description' => $this->nullOrValue($data, 'social_media_description'),
        ]);

        $post->refresh();

        return $post;
    }
}
