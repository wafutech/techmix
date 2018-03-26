<?php namespace Wafutech\Technologies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWafutechTechnologiesTechnologies extends Migration
{
    public function up()
    {
        Schema::rename('wafutech_technologies_', 'wafutech_technologies_technologies');
        Schema::table('wafutech_technologies_technologies', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::rename('wafutech_technologies_technologies', 'wafutech_technologies_');
        Schema::table('wafutech_technologies_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
