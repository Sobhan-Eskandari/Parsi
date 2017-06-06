<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('about_us');
            $table->string('about_us_photo');
            $table->text('about_conference');
            $table->text('about_event');
            $table->string('ticket_link')->nullable(true);
            $table->text('address');
            $table->char('land_line', 11);
            $table->char('mobile', 11);
            $table->string('email');
            $table->string('site_title');
            $table->text('meta_description');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('instagram')->nullable(true)->default('https://www.instagram.com/');
            $table->string('telegram')->nullable(true)->default('https://telegram.org/');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
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
}
