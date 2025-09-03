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
        $n->subject = $data['subject'];
        $n->description = $data['description'];
        $n->save();



        /*$mail = Mailer::sendMail('Thank You for Contacting Us | Letsoffleash', $data['email'], 'DMS', 'web.emails.response', $data);*/
        $mail = Mailer::sendMail('#'.$n->id.' - New Inquiry Received! | Meet LasaOna', ['waseem@datamysite.com', 'info@meetlasaona.com'], 'Meet Lasa Ona', 'web.emails.enquiry', $data);


        $response['success'] = 'success';
        $response['message'] = 'Success! We received your equiry.';



        return response()->json($response, 200);

    }
}
