<?php

namespace App\Services;

use App\Models\Release;
use App\Services\BaseService;

class GetVersion extends BaseService
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
            'version' => 'required|string|max:255',
        ];
    }

    /**
     * Get version informations.
     *
     * @param array $data
     * @return array
     */
    public function execute(array $data): array
    {
        $this->validate($data);

        // check which version is the current one
        $currentVersion = Release::orderBy('id', 'desc')->first();

        // check which version the user has
        $userVersion = Release::where('version', $data['version'])->first();
        $userVersionId = (! $userVersion) ? 0 : $userVersion->id;

        // is the version of the user, the current version?
        $isNewVersion = $currentVersion->version !== $data['version'];

        // how many versions have there been since the version of the user?
        $numberOfVersionsSinceUserVersion = $currentVersion->id - $userVersionId;

        // get all the release notes that have been released since the version of the user
        $releaseNotesMessage = null;
        if ($userVersionId !== $currentVersion->id) {
            $releaseNotesMessage = Release::whereBetween('id', [$userVersionId + 1, $currentVersion->id])
                ->orderBy('id', 'desc')
                ->get()
                ->map(function ($releaseNote) {
                    return '<h2>v'.$releaseNote->version.'</h2>'.'<div class="note">'.$releaseNote->notes.'</div>';
                })
                ->implode('');
        }

        return [
            'new_version' => $isNewVersion,
            'latest_version' => $currentVersion->version,
            'number_of_versions_since_user_version' => $numberOfVersionsSinceUserVersion,
            'notes' => $releaseNotesMessage,
        ];
    }
}
