<?php namespace Wafutech\Ranking\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechRankingRpsTypes extends Migration
{
    public function up()
    {
        Schema::create('wafutech_ranking_rps_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type', 100);
            $table->string('rps_description', 255);
            $table->integer('points')->unsigned();
             $table->string('code');

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_ranking_rps_types');
    }
}
