<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'request_id',
        'approver_id',
        'approved_at',
        'status',
        'notes'
    ];

    public function request()
    {
        return $this->belongsTo(Request::class);
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approver_id');
    }
}
