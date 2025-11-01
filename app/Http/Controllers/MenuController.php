<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Dish;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
class MenuController extends Controller
{
    public function __invoke()
    {
        $user = Auth::guard('tables')->user();
        $notification = Cache::pull("table_{$user->id}_notification");
        $dishes = Dish::latest()->get()->groupBy('category');
        return view('customer.menu', [
            'appetizers' => $dishes['Appetizer'] ?? collect(),
            'platters' => $dishes['Platter'] ?? collect(),
            'sandwiches' => $dishes['Sandwich'] ?? collect(),
            'drinks' => $dishes['Drink'] ?? collect(),
            'notification' => $notification
        ]);
    }
}