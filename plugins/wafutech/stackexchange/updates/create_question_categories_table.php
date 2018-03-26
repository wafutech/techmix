<?php namespace Wafutech\Stackexchange\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateQuestionCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('wafutech_stackexchange_question_categories', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('category',100)->unique();
            $table->string('description',200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wafutech_stackexchange_question_categories');
    }
}
