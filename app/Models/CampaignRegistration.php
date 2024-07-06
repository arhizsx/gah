<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\CampaignRegistrationObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;


#[ObservedBy([CampaignRegistrationObserver::class])]

class CampaignRegistration extends Model
{
    use HasFactory;

    protected $table = 'campaign_registrations';

    protected $primaryKey = 'id';
    protected $fillable = ['campaign', 'user_id', 'data', 'status', 'vendor'];

}

