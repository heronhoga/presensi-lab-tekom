<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles'; // Nama tabel dalam database

    protected $fillable = ['name']; // Field yang dapat diisi secara massal

    public $timestamps = true; // Mengaktifkan created_at & updated_at

    // Relasi jika ada, misalnya ke User (jika setiap user memiliki satu role)
    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}