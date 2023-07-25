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
        Schema::create('_register', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('FirstName');
            $table->string('LasstName');
            $table->string('Gender');
            $table->date('Date_of_Birth');
            $table->biginteger('PhoneNumber');
            $table->string('email');
            $table->string('Country');
            $table->string('state');
            $table->string('city');
            $table->string('image');
            $table->set('Hobbies',['badminton','Drawing','Reading_Books']);
            $table->unsignedBigInteger('User_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_register');
    }
};
