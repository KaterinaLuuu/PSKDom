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
        Schema::create('mortgage_programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('interest_rate');
            $table->unsignedInteger('max_term');
            $table->unsignedInteger('min_down_payment');
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
        Schema::dropIfExists('mortgage_program');
    }
};
