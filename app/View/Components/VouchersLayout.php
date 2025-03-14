<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\VoucherUsers;
use Auth;

class VouchersLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {

        $voucher_user = VoucherUsers::where("user_id", Auth::user()->id)->first();

        return view('modules.vouchers.layout.main', ["voucher_user" => $voucher_user]);
    }
}
