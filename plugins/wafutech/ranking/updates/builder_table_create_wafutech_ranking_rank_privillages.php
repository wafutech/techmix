<?php namespace Wafutech\Ranking\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechRankingRankPrivillages extends Migration
{
    public function up()
    {
        Schema::create('wafutech_ranking_rank_privillages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('privillage', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_ranking_rank_privillages');
    }
}
