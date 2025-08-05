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
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("weight");
            $table->string("race");
            $table->integer("age");
            
            $table->unsignedBigInteger('animal_type_id');
            $table->timestamps();


            //Aqui se define una llave foranea
            $table->foreign('animal_type_id')->references('id')->on('animal_types');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dogs');
    }
};
