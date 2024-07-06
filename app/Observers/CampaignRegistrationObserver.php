<?php

namespace App\Observers;

use App\Models\CampaignRegistration;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;
use Illuminate\Support\Facades\Mail;

use App\Mail\NewCampaignRegistration;
use App\Mail\NewCampaignRegistrationNoVendor;
use App\Mail\UpdatedCampaignRegistration;
use Illuminate\Support\Facades\DB;

class CampaignRegistrationObserver implements ShouldHandleEventsAfterCommit
{
    /**
     * Handle the CampaignRegistration "created" event.
     */
    public function created(CampaignRegistration $campaignRegistration): void
    {

        Log::info("cretated " . json_encode($campaignRegistration));

        $data = json_decode( $campaignRegistration->data, true );

        $vendor = $this->getVendor( $data["province"], $data["city"] );

        $selected = DB::table("vendors")->where("supervendor", $vendor)->first();

        if( $vendor  && $selected){
            Mail::to( $selected->email )->queue( new NewCampaignRegistration( $campaignRegistration ) );
        }
        else {
            Mail::to( "arhizsx@gmail.com" )->queue( new NewCampaignRegistrationNoVendor( $campaignRegistration ) );
        }

    }

    /**
     * Handle the CampaignRegistration "updated" event.
     */
    public function updated(CampaignRegistration $campaignRegistration): void
    {
        Log::info("updated " . json_encode($campaignRegistration));
        Mail::to( "arhizsx@gmail.com" )->queue( new UpdatedCampaignRegistration($campaignRegistration) );

    }

    /**
     * Handle the CampaignRegistration "deleted" event.
     */
    public function deleted(CampaignRegistration $campaignRegistration): void
    {
        //
    }

    /**
     * Handle the CampaignRegistration "restored" event.
     */
    public function restored(CampaignRegistration $campaignRegistration): void
    {
        //
    }

    /**
     * Handle the CampaignRegistration "force deleted" event.
     */
    public function forceDeleted(CampaignRegistration $campaignRegistration): void
    {
        //
    }


    function getVendor ( $province, $city ) {

        $vendor = DB::table("locations")
                    ->where("PROVINCE", $province)
                    ->where("CITY", $city)
                    ->get();

        return $vendor->{'Super vendor'};

    }
}
