<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dog_name');
            $table->date('date_bg');
            $table->time('start_time');
            $table->string('complete_time');
            $table->string('sample_type');
            $table->decimal('sample_level');
            $table->string('alert_type');
            $table->string('location');
            $table->string('activity');
            $table->string('missed_alert');
            $table->string('response_decoy');
            $table->text('notes');
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
        Schema::dropIfExists('trials');
    }
}
