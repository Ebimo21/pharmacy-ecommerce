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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 6);
            $table->string('email', 6)->unique();
            $table->timestamp('email_verified_at', 6)->nullable();
            $table->string('password', 6);
            $table->string('viewpassword', 6);
            $table->rememberToken();
            $table->foreignId('current_team_id', 6)->nullable();
            $table->string('profile_photo_path', 6)->nullable();
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
        Schema::dropIfExists('users');
    }
};
