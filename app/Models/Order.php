<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'dinner_table_id'
    ];

    public function dinner_table()
    {
        return $this->belongsTo(DinnerTable::class);
    }
}
