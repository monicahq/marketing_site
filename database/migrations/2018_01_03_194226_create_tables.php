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
        Schema::connection('mysqlMkg')->create('categories', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::connection('mysqlMkg')->create('posts', function($table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('post');
            $table->integer('category_id');
            $table->string('social_media_description');
            $table->timestamps();
        });

        DB::connection('mysqlMkg')->table('categories')->insert(['name' => 'New features', 'slug' => 'new-feature']);
        DB::connection('mysqlMkg')->table('categories')->insert(['name' => 'Growing a company', 'slug' => 'growing']);
    }
}
