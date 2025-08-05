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
        DB::table('animal_types')->insert([
            ['name' => 'Mamifero', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Anfibio', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ave', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reptil', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pez', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('animal_types')->whereIn('name', ['Mamifero', 'Anfibio', 'Ave', 'Reptil', 'Pez'])->delete();
    }
};