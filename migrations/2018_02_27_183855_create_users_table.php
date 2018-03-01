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
            $table->increments('id');
            $table->string('uid', 36)->unique();
            $table->string('national_code', 10)->nullable();
            $table->json('title')->nullable();
            $table->json('first_name')->nullable();
            $table->json('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->boolean('is_active')->default(0);
            $table->unsignedTinyInteger('status_id')->default(1);
            $table->timestamp('birth_date', '50')->nullable();
            $table->string('nickname')->nullable();
            $table->enum('gender', ['man', 'woman'])->nullable();
            $table->json('description')->nullable();
            $table->string('password_question')->nullable();
            $table->string('password_answer')->nullable();
            $table->string('telephone', '15')->nullable();
            $table->string('cellphone', '15')->unique();
            $table->string('username', '50')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
