<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NotificationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register( Request $request ) {
        // Validate incoming request
        $request->validate( [
            'first_name' => 'required|string|min:3|max:60',
            'last_name' => 'required|string|min:3|max:60',
            'email' => 'required|email|min:3|max:60',
            'company' => 'required|string|min:3|max:150',
            'attend' => 'required|string|max:50',
            'expertise' => 'required|string|max:50',
        ] );
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'company' => $request->company,
            'attend' => $request->attend,
            'expertise' => $request->expertise
        ];

        Mail::to( $request->email )->cc( [ 'ing.molinanestor@outlook.com' , 'registration@dmdsny.com' ] )->send( new NotificationMail( $data ) );

        return 'done';
    }
}
