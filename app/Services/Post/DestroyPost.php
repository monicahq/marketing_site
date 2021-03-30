<?php

namespace App\Services\Post;

use App\Models\Post;
use App\Services\BaseService;

class DestroyPost extends BaseService
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
        ];
    }

    /**
     * Delete a post.
     *
     * @param array $data
     * @return bool
     */
    public function execute(array $data): bool
    {
        $this->validate($data);

        Post::findOrFail($data['post_id'])->delete();

        return true;
    }
}
