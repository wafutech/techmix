<?php namespace Wafutech\Ranking\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechRankingUserSkillRanks extends Migration
{
    public function up()
    {
        Schema::create('wafutech_ranking_user_skill_ranks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('skill_id')->unsigned();
            $table->integer('rank_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_ranking_user_skill_ranks');
    }
}
