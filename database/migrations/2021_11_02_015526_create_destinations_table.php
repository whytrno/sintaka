<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('destination_types', function (Blueprint $table) {
            $table->id('destination_type_id');
            $table->String('destination_type_nama');
            $table->timestamps();
        });

        Schema::create('destinations', function (Blueprint $table) {
            $table->id('destination_id');
            $table->unsignedBigInteger('destination_type_id');
            $table->String('destination_name');
            $table->Text('destination_profil');
            $table->Text('destination_facility');
            $table->String('destination_ticket_price');
            $table->String('destination_address');
            $table->timestamps();

            $table->foreign('destination_type_id')->references('destination_type_id')->on('destinations_type')->onDelete('cascade');
        });

        Schema::create('destination_images', function (Blueprint $table) {
            $table->id('destination_image_id');
            $table->unsignedBigInteger('destination_id');
            $table->String('destination_image');
            $table->timestamps();
            
            $table->foreign('destination_id')->references('destination_id')->on('destinations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
}
