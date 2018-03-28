<?php namespace Wafutech\Stackexchange\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechStackexchangeQuestionTags extends Migration
{
    public function up()
    {
        Schema::create('wafutech_stackexchange_question_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('question_id')->unsigned();
            $table->integer('tag_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_stackexchange_question_tags');
    }
}
