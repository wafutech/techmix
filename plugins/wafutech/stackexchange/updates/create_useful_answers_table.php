<?php namespace Wafutech\Stackexchange\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUsefulAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('wafutech_stackexchange_useful_answers', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('question_id')->unsigned();
            $table->integer('answer_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wafutech_stackexchange_useful_answers');
    }
}
