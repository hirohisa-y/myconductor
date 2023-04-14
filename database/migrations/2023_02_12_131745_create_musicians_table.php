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
        Schema::create('musicians', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthday')->nullable(true);
            $table->date('deathday')->nullable(true);
            $table->string('nationality');
            $table->text('detail');
            $table->string('url1');
            $table->string('url2')->nullable(true);
            $table->string('url3')->nullable(true);
            $table->string('url4')->nullable(true);
            $table->string('url5')->nullable(true);
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
        Schema::dropIfExists('musicians');
    }
};
