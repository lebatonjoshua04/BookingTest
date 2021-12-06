<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function accountinformation(){
        $title = 'ACCOUNT INFORMATION';
        return view ('pages.accountinformation', compact('title'));
    }

    public function bookdetails(){
        $title = 'Reservation Details';
        return view ('pages.bookdetails', compact('title'));
    }
}
