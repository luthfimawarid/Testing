<?php
// Contoh model Notification

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['id_user', 'message', 'read_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
