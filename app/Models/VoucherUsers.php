<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoucherUsers extends Model
{
    use HasFactory;

    protected $table = 'vouchers_users';

    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 
        'position'
    ];
}
