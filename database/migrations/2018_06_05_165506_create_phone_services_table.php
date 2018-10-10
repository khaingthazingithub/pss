<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('model_id');
            $table->text('error');
            $table->jsonb('accessory_name');
            $table->jsonb('accessory_model_no');            
            $table->date('start_date');
            $table->date('expire_date');
            $table->string('phone_no');
            $table->integer('price');
            $table->foreign('brand_id')->references('id')->on('phone_brands');
            $table->foreign('model_id')->references('id')->on('service_models');
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
        Schema::dropIfExists('phone_services');
    }
}