<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJirapatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jirapat', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('number')->nullable();
            $table->float('height')->nullable();
            $table->string('name')->nullable();
            $table->date('age')->nullable();
            $table->text('nickname')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jirapat');
    }
}
