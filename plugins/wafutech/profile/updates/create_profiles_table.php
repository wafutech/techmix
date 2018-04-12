<?php namespace Wafutech\Profile\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('wafutech_profile_profiles', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
             $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('sex',5)->nullable();
            $table->text('bio')->nullable();
            $table->string('phone',10)->nullable();
            $table->string('country_code',4)->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('google')->nullable();
            $table->string('pinterest',10)->nullable();
            $table->string('whatsup',4)->nullable();
            $table->string('instagram')->nullable();
            $table->string('github')->nullable();
             $table->string('avatar')->nullable();
              $table->string('college')->nullable();
            $table->string('high_school')->nullable();
            $table->string('skills')->nullable();
            $table->text('work_experience')->nullable();
            $table->text('awards')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wafutech_profile_profiles');
    }
}
