<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'id_role');
    }

    protected $fillable = [
        'name_user',
        'area',
        'email',
        'password',
        'id_role',
    ];
}
