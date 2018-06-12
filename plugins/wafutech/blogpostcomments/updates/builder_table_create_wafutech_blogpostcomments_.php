<?php namespace Wafutech\Blogpostcomments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechBlogpostcomments extends Migration
{
    public function up()
    {
        Schema::create('wafutech_blogpostcomments_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->integer('post_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('comment');
            $table->integer('parent_id')->unsigned();
            $table->foreign('post_id')->references('rainlab_blog_posts')->on('id')->onDelete('cascade');
            $table->foreign('parent_id')->references('wafutech_blogpostcomments_')->on('id')->onDelete('cascade');

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_blogpostcomments_');
    }
}
