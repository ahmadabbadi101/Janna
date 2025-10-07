<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Table;
use App\Models\Dish;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tables_dishes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Table::class);
            $table->foreignIdFor(Dish::class);
            $table->integer('quantity');
            $table->boolean('confirmed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables_dishes');
    }
};
