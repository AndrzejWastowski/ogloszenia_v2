<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            // Przykładowo zmniejszona długość dla ID zewnętrznych, jeśli znana jest ich maksymalna długość
            $table->string('facebook_id', 191)->nullable()->unique();
            $table->string('google_id', 191)->nullable()->unique();
            $table->string('name', 191);
            $table->string('family_name', 191)->nullable();
            $table->string('login', 191)->nullable()->index(); // Dodanie indeksu, jeśli będzie używane do wyszukiwania
            $table->string('email', 191)->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('email_verified')->nullable(); // Zmiana na boolean
            $table->char('locale', 2)->nullable(); // Zmiana na CHAR dla stałej długości
            $table->string('avatar', 191)->nullable();
            $table->string('password', 191)->nullable();
            $table->string('oldpassword', 32)->nullable();
            $table->string('city', 191)->nullable();
            $table->string('zip', 191)->nullable();
            $table->string('country', 191)->nullable();
            $table->string('adress', 191)->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->string('social_id', 191)->nullable();
            $table->string('social_type', 191)->nullable();
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
}
