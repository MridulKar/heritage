<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_services', function (Blueprint $table) {
            $table->id();
            $table->string('country_name');
            $table->string('country_image')->nullable();
            $table->string('document_requirement')->nullable();
            $table->string('fee')->nullable();
            $table->string('remarks')->nullable();
            $table->tinyInteger('is_enlisted_agent')->default(0);
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('visa_services');
    }
}
