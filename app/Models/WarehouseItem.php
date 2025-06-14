<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarehouseItem extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'item_name',
        'stock_quantity',
        'vendor_id'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function requestItems()
    {
        return $this->hasMany(RequestItem::class, 'item_id');
    }
}
