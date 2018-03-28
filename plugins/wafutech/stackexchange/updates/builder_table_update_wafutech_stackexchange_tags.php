<?php namespace Wafutech\Stackexchange\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWafutechStackexchangeTags extends Migration
{
    public function up()
    {
        Schema::table('wafutech_stackexchange_tags', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('id')->change();
            $table->string('tag', 50)->change();
        });
    }
    
    public function down()
    {
        Schema::table('wafutech_stackexchange_tags', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->increments('id')->change();
            $table->string('tag')->change();
        });
    }
}
