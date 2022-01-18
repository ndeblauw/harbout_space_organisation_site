<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'begin_date' => 'datetime',
        'visible' => 'boolean',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
