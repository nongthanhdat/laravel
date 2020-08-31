<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained('books');

            //$table->unsignedInteger('book_id');
            //$table->foreign('book_id')->references('id')->on('books');
            $table->foreignId('user_id')->constrained('users');

            //$table->unsignedInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users');
            $table->string('date_issued',100);
            $table->string('date_due_for_return',100);
            $table->string('date_return',100)->nullable();
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
        Schema::dropIfExists('histories');
    }
}
