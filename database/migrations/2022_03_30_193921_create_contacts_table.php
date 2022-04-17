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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->text('name');
            $table->text('mail');
            $table->text('phone')->nullable();
            $table->text('date')->nullable();

            $table->unsignedBigInteger('team_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();

            $table->foreign('team_id')->references('id')->on('teams')->onDelete('set null');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('set null');
            
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
        Schema::dropIfExists('contacts');
    }
};
