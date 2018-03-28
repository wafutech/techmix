<?php namespace Wafutech\Stackexchange\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechStackexchangeTags extends Migration
{
    public function up()
    {
        Schema::create('wafutech_stackexchange_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('tag', 50);
            $table->boolean('approved')->default(0);
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_stackexchange_tags');
    }
}
