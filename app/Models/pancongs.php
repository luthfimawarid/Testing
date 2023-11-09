<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pancongs extends Model
{
    use HasFactory;
    protected $table = 'pancongs';
    protected $primaryKey = 'id_menu';
}
