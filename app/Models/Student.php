<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model

{
    protected $primaryKey = 'nim';
    protected $fillable = [
        'nim',
        'nama',
        'angkatan',
    ];
}
