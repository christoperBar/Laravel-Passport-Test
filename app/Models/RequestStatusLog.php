<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestStatusLog extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'request_id',
        'status',
        'updated_at',
        'updated_by',
        'notes'
    ];

    public function request()
    {
        return $this->belongsTo(Request::class);
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
