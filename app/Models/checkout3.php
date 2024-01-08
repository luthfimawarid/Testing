<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout3 extends Model
{
    use HasFactory;

    protected $table = 'checkout3';
    protected $primaryKey = 'id_pesanan';
    protected $guarded = 'id_pesanan';
}
