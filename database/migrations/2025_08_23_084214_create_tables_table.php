<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Table;
use App\Models\Dish;
use App\Models\Employee;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->foreignIdFor(Employee::class);
            $table->timestamps();
        });

        Schema::create('tables_dishes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Table::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Dish::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables');
        Schema::dropIfExists('tables_dishes');
    }
};
