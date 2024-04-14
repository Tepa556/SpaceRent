<?php

namespace App\Http\Controllers;


use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\User;

class GetDataUserController extends Controller
{
    public function showFormData(User $user, Reservation $reservation)
    {

        return view('account', compact( 'reservation', 'user'));

    }
}

