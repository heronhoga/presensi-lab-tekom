<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Visitor extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nim',
        'check_in',
    ];
}
