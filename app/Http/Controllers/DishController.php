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
        return view('dishes.create');
    }
    public function store() 
    {
        request()->validate([
            'name' => ['required', 'string', 'min:1', 'max:20'],
            'price' => ['required', 'string', 'min:1', 'max:8'],
            'description' => ['required', 'string', 'min:1', 'max:200'],
            'category' => ['required']
        ]);
        Dish::create(request()->all());
        return redirect('/admin/dishes');
    }
    public function destroy(Dish $dish) 
    {
        $dish->delete();
        return redirect('/admin/dishes');
    }
}
