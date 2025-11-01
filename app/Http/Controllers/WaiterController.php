<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use App\Models\Table;
use Illuminate\Support\Facades\Cache;
class WaiterController extends Controller
{
    public function index()
    {
        /** @var Employee $user */
        $user = Auth::guard('employees')->user();
        return view('waiter.waiter', [
        'user' => $user
        ]);
    }

    public function destroy(Dish $dish)
    {
        /** @var Employee $user */
        $user = Auth::guard('employees')->user();
        $tableId= request()->input('table_id');
        Cache::put("table_{$tableId}_notification", [
            'type'=>'dish_removed',
            'message'=>"Order of dish {$dish->name} is now ready!",
        ], 300);
        
        $dish->tables()->detach($tableId);
        return redirect('/waiter');
    }
}