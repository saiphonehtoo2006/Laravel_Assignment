<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'met_value',
    ];

    protected $cast = [
        'met_value' => 'decimal:2',
    ];

    public function acivityLogs()
    {
        return $this->hasMany(ActivityLog::class);
    }
    public  function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
