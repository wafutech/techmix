<?php namespace Wafutech\Stackexchange\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWafutechStackexchangeQuestions extends Migration
{
    public function up()
    {
        Schema::table('wafutech_stackexchange_questions', function($table)
        {
            $table->integer('closed')->default(0);
            $table->string('slug', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('wafutech_stackexchange_questions', function($table)
        {
            $table->dropColumn('closed');
            $table->dropColumn('slug');
        });
    }
}
