<?php namespace Wafutech\Stackexchange\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('wafutech_stackexchange_questions', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('question',255);
            $table->text('question_detail');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wafutech_stackexchange_questions');
    }
}
