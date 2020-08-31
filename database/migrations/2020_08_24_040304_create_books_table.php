<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('authors');
            //$table->unsignedInteger('author_id');
            //$table->foreign('author_id')->references('id')->on('authors');
            $table->foreignId('category_id')->constrained('categories');
            //$table->unsignedInteger('category_id');
            //$table->foreign('category_id')->references('id')->on('categories');
            $table->string('name',100);
            $table->string('image');
            $table->string('content');
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
        Schema::dropIfExists('books');
    }
}
