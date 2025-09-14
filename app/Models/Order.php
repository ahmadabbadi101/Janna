<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Table;


class Order extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

    
    public function table() {
        return $this->belongsTo(Table::class);
    }
}
