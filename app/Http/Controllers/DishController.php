<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::latest()->get()->groupBy('category');
        return view('dishes.index', [
            'appetizers' => $dishes['Appetizer'] ?? collect(), 
            'platters' => $dishes['Platter'] ?? collect(), 
            'sandwiches' => $dishes['Sandwich'] ?? collect(), 
            'drinks' => $dishes['Drink'] ?? collect()   
        ]);
    }
    public function create()
    {
        
    }
    public function store() 
    {
        
    }
    public function destroy(Dish $dish) 
    {
        $dish->delete();
        return redirect('/admin/dishes');
    }
}
