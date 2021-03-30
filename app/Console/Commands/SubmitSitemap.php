<?php

namespace App\Console\Commands;

use Ixudra\Curl\Facades\Curl;
use Illuminate\Console\Command;

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
    protected $description = 'Submits the sitemap to the big 3.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sitemapUrl = "https://www.monicahq.com/sitemap/sitemap.xml";

        $url = "http://www.google.com/webmasters/sitemaps/ping?sitemap=".$sitemapUrl;
        $response = Curl::to($url)->get();

        //Bing / MSN
        $url = "http://www.bing.com/webmaster/ping.aspx?siteMap=".$sitemapUrl;
        $response = Curl::to($url)->get();

        //ASK
        $url = "http://submissions.ask.com/ping?sitemap=".$sitemapUrl;
        $response = Curl::to($url)->get();
    }
}
