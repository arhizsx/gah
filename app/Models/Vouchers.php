<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vouchers extends Model
{
    use HasFactory;

    protected $table = 'vouchers';

    protected $primaryKey = 'id';
    protected $fillable = 
    [
        'Reference Number', 
        'First Name', 
        'Middle Name', 
        'Last Name', 
        'Suffix', 
        'Mobile Number', 
        'Email', 
        'Report/Lead Type', 
        'Product SKU', 
        'Purchased At (Date+Time)', 
        'Payment Method', 
        'Payment Status', 
        'Acqui Channel',
        'Revenue',
        'Payment Transaction ID',
        'Expired At (Date)',
        'Expired At (Time)',
        'Voucher Type',
        'Date Emailed',
        'Voucher Assigned',
        'Email Sent Date',
        'Viber/SMS Sent Date',
        'Viber/SMS  Status',
        'Redemption Date'
    ];
}
