<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->string('image');
            $table->string('title');
            $table->string('curr')->nullable();
            $table->string('price');
            $table->string('minititle');
            $table->string('curre')->nullable();
            $table->string('miniprice');
            $table->string('ry')->nullable();
            $table->string('quantity_of_bricks')->nullable();
            $table->string('map')->nullable();
            $table->string('short_desc');
            $table->string('long_desc')->nullable();
            $table->string('about_desc');
            $table->string('next_desc_1');
            $table->string('next_desc_2')->nullable();
            $table->string('next_desc_3')->nullable();
            $table->string('about_image_1')->nullable();
            $table->string('about_image_2')->nullable();
            $table->string('about_image_3')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
