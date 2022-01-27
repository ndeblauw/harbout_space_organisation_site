<?php

namespace App\Models;

use App\Scopes\VisibleScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Activity extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    protected $guarded = [];

    protected $casts = [
        'begin_date' => 'datetime',
        'end_date' => 'datetime',
        'visible' => 'boolean',
    ];

    protected static function booted()
    {
        //static::addGlobalScope(new VisibleScope);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('payment_status');
    }

    public function scopeVisible($query)
    {
        return $query->where('visible', '=', true);
    }

    public function scopeUpcoming($query)
    {
        return $query->where('begin_date', '>=', now())->orderBy('begin_date', 'asc');
    }

    public function scopeRandomSelectionFromPast($query, $amount)
    {
        return $query->where('begin_date', '<', now())->inRandomOrder()->take($amount);
    }

    public function getDurationAttribute()
    {
        // strict comparison vs loose comparison

        if( $this->begin_date === null ) {
            return 0;
        }

        return $this->end_date->diffInMinutes($this->begin_date)/60;
    }



    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('small')
            ->crop('crop-center', 300, 50)
            ->width(300)
            ->height(50)
            ->sharpen(5);
    }
}
