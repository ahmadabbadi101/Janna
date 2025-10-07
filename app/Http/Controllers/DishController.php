<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\User;
use App\Models\Table;
use Illuminate\Support\Facades\Auth;

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
        return redirect('/admin/dishes')->with('success', 'Dish created successfully.');
    }
    public function destroy(Dish $dish) 
    {
        $dish->delete();
        return redirect('/admin/dishes')->with('success', 'Dish deleted successfully.');
    }

    public function menu()
    {
        $dishes = Dish::latest()->get()->groupBy('category');
        return view('menu', [
            'appetizers' => $dishes['Appetizer'] ?? collect(), 
            'platters' => $dishes['Platter'] ?? collect(), 
            'sandwiches' => $dishes['Sandwich'] ?? collect(), 
            'drinks' => $dishes['Drink'] ?? collect()   
        ]);
    }
    public function addToCart(Dish $dish)
    {
        /** @var Table $user */
        $user = Auth::guard('tables')->user();
        $dish->tables()->attach($user->id, ['quantity' => request()->quantity]);
        return redirect('/menu');
    }
    public function Cart()
    {
        return view('cart');
    }
    public function removeFromCart(Dish $dish)
    {
        /** @var Table $user */
        $user = Auth::guard('tables')->user();
        $dish->tables()->detach($user->id);
        return redirect('/cart');
    }
    public function confirmCart()
    {
        /** @var Table $user */
        $user = Auth::guard('tables')->user();
        $cartItems = $user->dishes()->wherePivot('confirmed', false)->get();
        
        foreach($cartItems as $dish) {
            $dish->tables()->updateExistingPivot($user->id, ['confirmed' => true]);
        }
        return redirect('/menu');
    }
}
