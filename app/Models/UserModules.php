<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModules extends Model
{
    protected $table = 'users_modules';

    protected $primaryKey = 'id';
    
    protected $fillable = [
        
        'module', 
        'user_id',

    ];
}
