<?php

namespace App\Services\Release;

use App\Models\Release;
use App\Services\BaseService;

class DestroyRelease extends BaseService
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
            'release_id' => 'required|integer|exists:releases,id',
        ];
    }

    /**
     * Delete a release.
     *
     * @param array $data
     * @return bool
     */
    public function execute(array $data): bool
    {
        $this->validate($data);

        Release::findOrFail($data['release_id'])->delete();

        return true;
    }
}
