<?php namespace Wafutech\Ranking\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWafutechRankingRps extends Migration
{
    public function up()
    {
        Schema::create('wafutech_ranking_rps', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('to_user_id')->unsigned();
            $table->integer('rps_type_id')->unsigned();
            $table->integer('from_user_id')->unsigned();
            $table->integer('rps')->unsigned();
            $table->string('url', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wafutech_ranking_rps');
    }
}
