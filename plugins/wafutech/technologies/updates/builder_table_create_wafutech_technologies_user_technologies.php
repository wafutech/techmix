<?php namespace Wafutech\Technologies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechTechnologiesUserTechnologies extends Migration
{
    public function up()
    {
        Schema::create('wafutech_technologies_user_technologies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('technology_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_technologies_user_technologies');
    }
}
