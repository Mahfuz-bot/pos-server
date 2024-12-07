<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['total_price', 'total_discount'];

    public function saleItems()
    {
        return $this->hasMany(SaleItem::class);
    }
}
