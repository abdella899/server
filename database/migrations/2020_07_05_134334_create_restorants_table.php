<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestorantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restorants', function (Blueprint $table) {
            $table->id();
            $table->longtext("image");
            $table->string("name");
            $table->longtext("desc");
            $table->string("time");
            $table->string("location");
            $table->string("state");
            $table->string("rate");
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
        Schema::dropIfExists('restorants');
    }
}
