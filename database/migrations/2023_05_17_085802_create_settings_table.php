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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name_ar');
            $table->string('site_name_en');
            $table->string('logo')->default('logo.jpg');
            $table->string('icon')->default('icon.jpg');
            $table->string('cover')->default('cover.jpg');

            // Contact
            $table->string('email')->default('info@800sat.com');
            $table->string('phone')->default('01153225410');
            $table->string('phone2')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('address')->nullable();

            // Social
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('whatsapp_link')->nullable();

            // About
            $table->string('title')->nullable();
            $table->longtext('description')->nullable();

            // Main Settings
            $table->string('main_lang')->default('arabic');
            $table->longtext('keywords')->nullable();
            $table->enum('status', ['open', 'close'])->default('open');
            $table->longtext('message_maintenance')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
