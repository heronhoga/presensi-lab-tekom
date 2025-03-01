<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Visitor extends Model
{
    public $timestamps  = false;
    protected $fillable = [
        'nim',
        'check_in',
    ];
// Relasi ke tabel students
    public function student()
    {
        return $this->belongsTo(Student::class, 'nim', 'nim');
    }

// Relasi ke tabel labs
    public function lab()
    {
        return $this->belongsTo(Lab::class, 'id_lab', 'id');
    }
}
