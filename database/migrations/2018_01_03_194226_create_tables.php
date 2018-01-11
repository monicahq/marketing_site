<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('posts', function($table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('post');
            $table->integer('category_id');
            $table->string('social_media_description');
            $table->timestamps();
        });

        Schema::create('releases', function($table)
        {
            $table->increments('id');
            $table->string('release_number')->unique();
            $table->text('description');
            $table->string('github_release_url');
            $table->date('released_on');
            $table->timestamps();
        });

        Schema::create('release_items', function($table)
        {
            $table->increments('id');
            $table->string('release_id');
            $table->text('description');
            $table->integer('github_pull_request_number')->nullable();
            $table->string('github_pull_request_url')->nullable();
            $table->string('github_author_name')->nullable();
            $table->string('github_author_url')->nullable();
            $table->string('screenshot_url')->nullable();
            $table->string('category');
            $table->timestamps();
        });

        DB::table('categories')->insert(['name' => 'New features', 'slug' => 'new-feature']);
        DB::table('categories')->insert(['name' => 'Growing a company', 'slug' => 'growing']);
    }
}
