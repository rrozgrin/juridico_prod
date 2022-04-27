<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'evento-categoria';
    
    protected $fillable = [
        'evento',
        'categoria'
    ];
    
    use HasFactory;
}
