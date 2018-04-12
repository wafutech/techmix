<?php namespace Wafutech\RelatedPosts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateRainlabBlogPostsTable extends Migration
{

    public function up()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->integer('category_id')->unsigned()->default(1)->index();
            $table->foreign('category_id')->references('id')->on('rainlab_blog_categories')->onDelete('cascade');
            $table->integer('views')->unsigned()->default(0)->index();

        });
    }

    public function down()
    {
Schema::table('rainlab_blog_posts', function ($table) {
            $table->dropColumn(['category_id']);
        });


                }

}
