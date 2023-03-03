<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Loja extends Model
{
    use HasFactory;

    protected $table = 'loja';
    protected $primaryKey = 'loja_cod';
}
