<?php namespace Wafutech\Technologies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechTechnologiesTechSubCategories extends Migration
{
    public function up()
    {
        Schema::create('wafutech_technologies_tech_sub_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('tech_cat_id')->unsigned();
            $table->string('sub_cat', 50);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_technologies_tech_sub_categories');
    }
}
