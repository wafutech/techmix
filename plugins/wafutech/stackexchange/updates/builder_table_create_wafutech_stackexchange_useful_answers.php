<?php namespace Wafutech\Stackexchange\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechStackexchangeUsefulAnswers extends Migration
{
    public function up()
    {
        Schema::create('wafutech_stackexchange_useful_answers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('question_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('answer_id')->unsigned();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_stackexchange_useful_answers');
    }
}
