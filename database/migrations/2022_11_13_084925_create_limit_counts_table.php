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
        Schema::create('limit_counts', function (Blueprint $table) {
            $table->id();
            $table->string('a_count');
            $table->string('b_count');
            $table->string('c_count');
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
        Schema::dropIfExists('limit_counts');
    }
};
