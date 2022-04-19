<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     * https://laravel.com/docs/4.2/schema
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('companyId');
            $table->string('companyName')->nullable();
            $table->string('companyRegistrationNumber')->nullable();
            $table->string('companyFoundationDate')->nullable();
            $table->string('country')->nullable();
            $table->string('zipCode')->nullable();
            $table->string('city')->nullable();
            $table->string('streetAddress')->nullable();
            $table->decimal('latitude', 8, 5)->nullable();
            $table->decimal('longitude', 9, 5)->nullable();
            $table->string('companyOwner')->nullable();
            $table->integer('employees')->nullable();
            $table->string('activity')->nullable();
            $table->string('active')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
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
}
