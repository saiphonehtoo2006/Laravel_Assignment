<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'activity_id',
        'duration_minutes',
        'calories_burned',
        'weight_recorded',
    ];

    protected $casts = [
        'calories_burned' => 'decimal:2',
        'weight_recorded' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
