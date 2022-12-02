<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('serviceable_id');
            $table->string('serviceable_type');
            $table->foreignId('time_slot_id')->constrained()->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreignId('service_id')->constrained()->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->date('date');
            $table->boolean('active')->default('1');
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
        Schema::dropIfExists('bookings');
    }
}
