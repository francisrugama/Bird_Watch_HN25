<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('type_activity');
            $table->string('duration');
            $table->string('location');
            $table->string('type_transport');
            $table->string('tour_language');
            $table->string('max_capacity');

            $table->integer('reservation_id')->unsigned();
            $table->foreign('reservation_id')->references('id')->on('reservations') ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('guide_id')->unsigned();
            $table->foreign('guide_id')->references('id')->on('guides')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('tour_category_id')->unsigned();
            $table->foreign('tour_category_id')->references('id')->on('tours_categories')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};

