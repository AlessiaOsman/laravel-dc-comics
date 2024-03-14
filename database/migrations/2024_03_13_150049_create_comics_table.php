<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 200)->unique()->nullable();
            $table->string('title', 100);
            $table->text('description');
            $table->string('thumb', 500)->nullable();
            $table->string('price', 10);
            $table->string('series', 100);
            $table->date('sale_date');
            $table->string('type', 50);
            $table->string('artists', 200);
            $table->string('writers', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
