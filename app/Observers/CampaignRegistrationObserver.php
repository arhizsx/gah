<?php

namespace App\Observers;

use App\Models\CampaignRegistration;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;
use Illuminate\Support\Facades\Mail;

use App\Mail\NewCampaignRegistration;
use App\Mail\SgtNewCampaignRegistration;
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

        $no_sgt = ["NSGT"];
        $with_sgt = ["SGT"];
        $mode = "new";

        $this->sender( $campaignRegistration, $no_sgt, $with_sgt, $mode );

    }

    /**
     * Handle the CampaignRegistration "updated" event.
     */
    public function updated(CampaignRegistration $campaignRegistration): void
    {
        Log::info("updated " . json_encode($campaignRegistration));

        DB::table("logs")->insert([
            "data" => json_encode($campaignRegistration),
            "created_at" => now(),
            "updated_at" => now()
        ]);

        if( $campaignRegistration->vendor == null ){

        } elseif( $campaignRegistration->vendor == "%MULTI_VENDORS%" ){

        } else {

            // $selected = DB::table("vendors")->where("supervendor", $campaignRegistration->vendor)->first();
            // Mail::to( $selected->email )->queue( new UpdatedCampaignRegistration($campaignRegistration) );

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

    function sender( $registration, $no_sgt, $with_sgt, $mode ){


        if( $registration->vendor == null || $registration->vendor == "%MULTI_VENDORS%" ){

            $to = [];

            if( in_array( "NSGT", $no_sgt ) ){

                $users = DB::TABLE("users_access")->where("profile", "NSGT")
                            ->JOIN("users", "users.id", "users_access.user_id")
                            ->SELECT("users.email")
                            ->WHERE("users_access.campaign", $registration->campaign )
                            ->GET();

                foreach( $users as $user ){
                    array_push( $to, $user->email );
                }

            }

            if( $mode == "new" ){

                Mail::to( $to )->send( new NewCampaignRegistrationNoVendor( $registration ) );

            }


        } else {

            if( in_array( "SV", $with_sgt ) ){

                $selected = DB::table("vendors")->where("supervendor", $registration->vendor)->first();

                if( $mode == "new" ){
                    // VENDOR
                    Mail::to( $selected->email )->send( new NewCampaignRegistration( $registration) );
                }

            }

            if( in_array( "SGT", $with_sgt ) ){

                if( $mode == "new" ){
                    // SGT
                    Mail::to( $registration->sgt_email )->send( new SgtNewCampaignRegistration( $registration) );
                }

            }

        }

    }

}
