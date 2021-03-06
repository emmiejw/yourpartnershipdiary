<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->date('date_bg');
            $table->time('time_bg');
            $table->decimal('bg_level');
            $table->string('reason_for_bg')->nullable();
            $table->string('treatment')->nullable();
            $table->string('symptoms')->nullable();
            $table->string('alert_type')->nullable();
            $table->string('activity')->nullable();
            $table->string('missed_alert')->nullable();
            $table->string('in_range')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diaries');
    }
}
