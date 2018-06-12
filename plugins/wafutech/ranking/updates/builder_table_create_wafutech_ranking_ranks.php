<?php namespace Wafutech\Ranking\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechRankingRanks extends Migration
{
    public function up()
    {
        Schema::create('wafutech_ranking_ranks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('rank', 50);
            $table->text('description');
            $table->integer('rps_points')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_ranking_ranks');
    }
}
