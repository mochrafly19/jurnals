<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'activity',
        'starts_at',
        'ends_at',
    ];

    protected $casts = [
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
    ];


    /**
     * Get the formatted start date.
     *
     * @return string
     */
    public function getFormattedStartsAtAttribute()
    {
        return $this->starts_at ? $this->starts_at->format('Y-m-d H:i:s') : null;
    }

    /**
     * Get the formatted end date.
     *
     * @return string
     */
    public function getFormattedEndsAtAttribute()
    {
        return $this->ends_at ? $this->ends_at->format('Y-m-d H:i:s') : null;
    }
}
