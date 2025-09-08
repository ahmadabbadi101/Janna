<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Table;

class Cart extends Model
{
    public function tables() {
        return $this->belongsTo(Table::class, 'tables_carts');
    }
}
