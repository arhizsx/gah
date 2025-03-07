<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageVisit extends Model
{
    protected $table = 'pagevisits';

    protected $primaryKey = 'id';
    protected $fillable = 
    [
        "user_id",
        "url",
        "ip"
    ];
}
