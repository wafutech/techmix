<?php namespace Wafutech\Technologies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechTechnologies extends Migration
{
    public function up()
    {
        Schema::create('wafutech_technologies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('technology', 50);
            $table->integer('category_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_technologies_');
    }
}
