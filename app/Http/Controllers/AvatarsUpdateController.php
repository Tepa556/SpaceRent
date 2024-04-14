<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;

class AvatarsUpdateController extends Controller
{
    public function getAvatar(Avatar $avatar,Request $request){
        $avatar->update($request->all());
        return redirect()->route('account');
    }
}
