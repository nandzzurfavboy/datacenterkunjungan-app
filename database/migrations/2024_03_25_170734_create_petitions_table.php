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
        Schema::create('petitions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dinas_id')->constrained('dinas');
            $table->string('name');
            $table->string('slug');
            $table->text('token');
            $table->string('nip');
            $table->text('address');
            $table->string('phone');
            $table->string('email');
            $table->string('subject');
            $table->date('date');
            $table->string('time');
            $table->integer('quota');
            $table->string('status')->default('pending');
            $table->text('document')->nullable();
            // approved, rejected, pending
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
        Schema::dropIfExists('petitions');
    }
};
