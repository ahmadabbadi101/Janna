<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use Illuminate\Support\Facades\Auth;
use App\Models\Dish;
use Illuminate\Support\Facades\Cache;

class CartController extends Controller
{
    public function index()
    {
        /** @var Table $user */
        $user = Auth::guard('tables')->user();
        return view('customer.cart', [
            'user' => $user
        ]);
    }
    public function store()
    {
        /** @var Table $user */
        $user = Auth::guard('tables')->user();
        $dishId = request()->input('dish_id');
        $quantity = request()->input('quantity');
        $dish = Dish::find($dishId);
        $dish->tables()->attach($user->id, ['quantity' => $quantity]);
        return redirect('/menu');
    }
    public function destroy(Dish $dish)
    {
        /** @var Table $user */
        $user = Auth::guard('tables')->user();
        $dish->tables()->detach($user->id);
        return redirect('/cart');
    }
    public function confirm()
    {
        /** @var Table $user */
        $user = Auth::guard('tables')->user();
        $cartItems = $user->dishes()->wherePivot('confirmed', false)->get();

        foreach ($cartItems as $dish) {
            $dish->tables()->updateExistingPivot($user->id, ['confirmed' => true]);
        }
        return redirect('/menu');
    }
   
}