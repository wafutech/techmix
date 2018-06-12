<?php namespace Wafutech\Ranking\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechRankingUserSkillScores extends Migration
{
    public function up()
    {
        Schema::create('wafutech_ranking_user_skill_scores', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('skill_id')->unsigned();
            $table->decimal('score', 10, 2);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_ranking_user_skill_scores');
    }
}
