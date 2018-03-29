<?php namespace Wafutech\Stackexchange\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechStackexchangeQuestionVotes extends Migration
{
    public function up()
    {
        Schema::create('wafutech_stackexchange_question_votes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('question_id');
            $table->integer('user_id');
            $table->integer('vote');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_stackexchange_question_votes');
    }
}
