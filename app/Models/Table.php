<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Order;

class Table extends User
{

    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tables';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'password',
        'employee_id',
    ];
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
            'password' => 'hashed',
        ];
    
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'tables_dishes', 'table_id', 'dish_id')
            ->withPivot('quantity', 'confirmed')
            ->withTimestamps();
    }
}
