<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Helpers\Mailer;

class EnquiryController extends Controller
{
    public function index(Request $request){
        $data = $request->all();
        

        $n = new Enquiry;
        $n->name = $data['name'];
        $n->email = $data['email'];
        $n->phone = $data['phone'];
        $n->description = $data['description'];
        $n->save();



        /*$mail = Mailer::sendMail('Thank You for Contacting Us | Letsoffleash', $data['email'], 'DMS', 'web.emails.response', $data);*/
        $mail = Mailer::sendMail('#'.$n->id.' - New Inquiry Received! | Letsoffleash', ['waseem@datamysite.com', 'kasturijha@datamysite.com'], 'Letsoffleash', 'web.emails.enquiry', $data);


        return redirect()->back()->with('success', 'Thank You for Contacting Us!');

    }
}
