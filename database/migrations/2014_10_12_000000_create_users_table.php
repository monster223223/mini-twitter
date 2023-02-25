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
            $table->bigIncrements('id');
            $table->string('name');
            $table->binary('dataimg')->nullable(); // BLOB equivalent to the table
            $table->string('imgname')->default('default.png'); // BLOB equivalent to the table

            $table->string('email')->unique();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        // DB::statement("ALTER TABLE users ADD dataimg MEDIUMBLOB");
        DB::statement("ALTER TABLE users MODIFY dataimg MEDIUMBLOB");
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
