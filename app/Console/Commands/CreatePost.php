<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreatePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create all the necessary information for a new blog post';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $path = base_path().'/public/img/social/posts/'.\Carbon\Carbon::now()->format('Y-m-d');
        $result = File::makeDirectory($path);

        if ($result == false) {
            $this->info('The directory already exists. Here is the path: '.$path);
        } else {
            $this->info('A directory has been created. Here is the path: '.$path);
        }
    }
}
