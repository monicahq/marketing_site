<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SubmitSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:submit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Submits the sitemap to search engines.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sitemapUrl = "https://www.monicahq.com/sitemap/sitemap.xml";

        $urls = "https://www.google.com/webmasters/sitemaps/ping?sitemap=$sitemapUrl";
        Http::get($url);
    }
}
