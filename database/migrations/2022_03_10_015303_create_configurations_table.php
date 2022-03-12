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
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();

            $table->string('logo');
            $table->string('favicon');
            $table->string('social');
            $table->string('phone');
            $table->string('location');
            $table->string('name_business');
            $table->string('mail');
            $table->text('mail_response');
            $table->string('seo_term');
            $table->text('meta_keywords');
            $table->text('meta_description');
            $table->text('analytics');
            $table->string('captcha_public');
            $table->string('captcha_private');

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
        Schema::dropIfExists('configurations');
    }
};
