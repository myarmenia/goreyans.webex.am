<?php

namespace App\Http\Controllers;

use App\Mail\MailToOrganization;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function sendMessage(Request $request){


        // dd($request->all());
           $response= Mail::to('gorckaarm@gmail.com')->send(new MailToOrganization([
                    "organization_name" =>$request->organization_name,
                    "number_guest" => $request->number_guest,
                    "message" => $request->message
                ]
            ));
          

    }
}
