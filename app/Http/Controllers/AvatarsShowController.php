<?php

namespace App\Http\Controllers;

use App\Models\Avatar;

class AvatarsShowController extends Controller
{
    public function showAvatar(Avatar $avatar){
        if($avatar==null){
           $account_null="asset('image/change_icon_account.png')";
           return view('account',compact($account_null));
        }else{
         return view('account',compact($avatar));
        }
    }
}
