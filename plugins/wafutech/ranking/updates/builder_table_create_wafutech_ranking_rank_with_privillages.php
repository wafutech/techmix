<?php namespace Wafutech\Ranking\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechRankingRankWithPrivillages extends Migration
{
    public function up()
    {
        Schema::create('wafutech_ranking_rank_with_privillages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('rank_id')->unsigned();
            $table->integer('privillage_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_ranking_rank_with_privillages');
    }
}
