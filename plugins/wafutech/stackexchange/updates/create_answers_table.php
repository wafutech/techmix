<?php namespace Wafutech\Stackexchange\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('wafutech_stackexchange_answers', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
          $table->integer('question_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('answer');
            $table->integer('accepted')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wafutech_stackexchange_answers');
    }
}
