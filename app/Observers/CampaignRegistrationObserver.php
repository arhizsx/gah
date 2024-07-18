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

        if( $campaignRegistration->vendor == null ){

            Mail::to( "arhizsx@gmail.com" )->queue( new NewCampaignRegistrationNoVendor( $campaignRegistration ) );

        } elseif( $campaignRegistration->vendor == "%MULTI_VENDORS%" ){

            Mail::to( "arhizsx@gmail.com" )->queue( new NewCampaignRegistrationNoVendor( $campaignRegistration ) );

        } else {

            $selected = DB::table("vendors")->where("supervendor", $campaignRegistration->vendor)->first();

            // VENDOR
            Mail::to( $selected->email )->queue( new NewCampaignRegistration( $campaignRegistration ) );

            // SGT
            Mail::to( $campaignRegistration->sgt_email )->queue( new NewCampaignRegistration( $campaignRegistration ) );

        }

    }

    /**
     * Handle the CampaignRegistration "updated" event.
     */
    public function updated(CampaignRegistration $campaignRegistration): void
    {
        Log::info("updated " . json_encode($campaignRegistration));

        if( $campaignRegistration->vendor == null ){

        } elseif( $campaignRegistration->vendor == "%MULTI_VENDORS%" ){

        } else {

            $selected = DB::table("vendors")->where("supervendor", $campaignRegistration->vendor)->first();
            Mail::to( $selected->email )->queue( new UpdatedCampaignRegistration($campaignRegistration) );

        }


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

}
