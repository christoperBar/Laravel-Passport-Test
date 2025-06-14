<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'contact_email'
    ];

    public function warehouseItems()
    {
        return $this->hasMany(WarehouseItem::class);
    }
}
