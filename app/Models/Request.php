<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'description',
        'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function requestItems()
    {
        return $this->hasMany(RequestItem::class);
    }

    public function approvals()
    {
        return $this->hasMany(Approval::class);
    }

    public function statusLogs()
    {
        return $this->hasMany(RequestStatusLog::class);
    }
}
