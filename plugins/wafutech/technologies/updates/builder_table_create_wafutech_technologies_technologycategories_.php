<?php namespace Wafutech\Technologies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechTechnologiesTechnologycategories extends Migration
{
    public function up()
    {
        Schema::create('wafutech_technologies_technologycategories_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('category', 50);
            $table->string('description', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_technologies_technologycategories_');
    }
}
