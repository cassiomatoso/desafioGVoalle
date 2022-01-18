<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('email')->unique();
            $table->string('cnpj');
            $table->string('city')->nullable(); 
            $table->string('uf')->nullable(); 
            $table->string('district')->nullable(); 
            $table->text('street')->nullable(); 
            $table->smallInteger('nro')->nullable();
            $table->text('complement')->nullable(); 
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
        Schema::dropIfExists('customers');
    }
}
