<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('take_overs', function (Blueprint $table) {
            $table->id();
            $table->string('a_take_over');
            $table->string('b_take_over');
            $table->string('c_take_over');
            $table->date('provided_in');
            $table->string('user_code');
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
        Schema::dropIfExists('take_overs');
    }
};
