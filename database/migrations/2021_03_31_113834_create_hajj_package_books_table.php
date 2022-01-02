<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHajjPackageBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hajj_package_books', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('package_id')->index();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('adults')->nullable();
            $table->string('children')->nullable();
            $table->longText('note')->nullable();
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
        Schema::dropIfExists('hajj_package_books');
    }
}
