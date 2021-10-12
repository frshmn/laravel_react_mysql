<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hastable('reviews')) {
          Schema::create('reviews', function (Blueprint $table) {
              $table->id();
              $table->string('live_date', 100);
              $table->string('musician', 100);
              $table->string('venue', 100);
              $table->text('text');
              $table->timestamps();
          });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
