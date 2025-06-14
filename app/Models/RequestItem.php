<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestItem extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'request_id',
        'item_id',
        'quantity',
        'notes'
    ];

    public function request()
    {
        return $this->belongsTo(Request::class);
    }

    public function item()
    {
        return $this->belongsTo(WarehouseItem::class, 'item_id');
    }
}
