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
        Schema::dropIfExists('tb_dinas');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('tb_dinas', function (Blueprint $table) {
            // Define the table schema if you want to revert the deletion
            $table->id();
            // Add other columns if necessary
            $table->timestamps();
        });
    }
};
