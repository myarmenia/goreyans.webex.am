<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMessageRequest;
use App\Mail\MailToOrganization;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends BaseController
{
    public function sendMessage(SendMessageRequest $request){


            try {
                $response= Mail::to('gorckaarm@gmail.com')->send(new MailToOrganization([
                    "organization_name" =>$request->organization_name,
                    "number_guest" => $request->number_guest,
                    "message" => $request->message,
                    "email" => $request->email
                ]


                ));

            return  $this->sendResponse( $response,'Ձեր պատասխանը հաջողությամբ ուղարկվել է');
              } catch (\Exception $e) {

                  return $e->getMessage();
              }



    }
}
