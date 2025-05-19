<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarImages extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'car_id',
        'image_path',
        'position',
    ];

    public function cars(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
