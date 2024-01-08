<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout2 extends Model
{
    use HasFactory;

    protected $table = 'checkout2';
    protected $primaryKey = 'id_pesanan';
    protected $guarded = 'id_pesanan';
}
