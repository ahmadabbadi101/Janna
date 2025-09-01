<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;
class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dish::create([
            "name" => "tabouleh",
            "price" => "6$",
            "description" => "Finely-chopped parsley, tomato and burgul are dressed with lemon and olive oil.",
            "category" => "appetizer",
        ]);
        Dish::create([
            "name" => "Chicken Shawerma Fatteh",
            "price" => "12$",
            "description" => "Chicken Shawerma over lovely garlic yogurt sauce, rice, and chopped pita.",
            "category" => "Platter",
        ]);
        Dish::create([
            "name" => "Chicken Shawerma",
            "price" => "10$",
            "description" => "Roasted thin slices of chicken, served with a side of fries and a garlic dip.",
            "category" => "Sandwich",
        ]);
        Dish::create([
            "name" => "Lemon Mint",
            "price" => "4$",
            "description" => "A refreshing drink made with lemon, freshmint, and ice.",
            "category" => "Drink",
        ]);
    }
}
