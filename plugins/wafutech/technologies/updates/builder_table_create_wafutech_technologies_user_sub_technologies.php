<?php namespace Wafutech\Technologies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechTechnologiesUserSubTechnologies extends Migration
{
    public function up()
    {
        Schema::create('wafutech_technologies_user_sub_technologies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_tech_id')->unsigned();
            $table->integer('sub_cat_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_technologies_user_sub_technologies');
    }
}
