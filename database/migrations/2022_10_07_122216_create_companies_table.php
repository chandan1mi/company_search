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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('company_email');
            $table->text('description')->nullable();
            $table->string('lei');
            $table->integer('lei_status');
            $table->string('managing_lou');
            $table->string('registration_number');
            $table->string('address');
            $table->string('country');
            $table->integer('number_of_employies');
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
        Schema::dropIfExists('companies');
    }
};
