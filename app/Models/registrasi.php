<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;
    protected $table = "register";
    protected $primaryKey = "id";
    protected $fillable = [
        'username', 'password', 'nomor_tlp','alamat','email'
    ];
}
