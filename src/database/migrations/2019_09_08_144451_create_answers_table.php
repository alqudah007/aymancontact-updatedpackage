<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');//->unsigned()->unique();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('contact_id');
            $table->longText('body');
            $table->text('uploaded_file_path')->nullable();
            $table->timestamps();

            // shall I define the foreign key ?! YES NOTE THIS on('questions') this is the DB name must be with (S).
            // shall I define the relationship ?! YES

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
