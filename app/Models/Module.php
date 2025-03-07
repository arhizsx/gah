<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'pagevisits';

    protected $primaryKey = 'module';
    protected $fillable = 
    [
        "module",
        "label",
        "image",
        "link",
        "route"
    ];
}
