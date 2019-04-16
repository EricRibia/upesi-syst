<?php

namespace App\Http\Controllers;
use App\Mail\FormSubmit;
use App\Mail\FormSubmitasst;
use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function userforms(Request $request){
        $contact = new Contact;
        if($request->identifier == 'contact'){
            $contact->type = 'contact';
            $name = $request->fname.' '.$request->lname;
            $contact->name = $name;
            $contact->email = $request->c_email;
            $contact->phonenumber = $request->c_phone;
            $contact->orgnmessage =$request->c_message;
            $contact->save();
            \Mail::to('eric.ndungu16@gmail.com')->queue(new FormSubmit($contact));
            // return  redirect()->back()->with('success','message sent successfully');
            return  response('Successfully sent message, we will get back to you shortly',200);
        }
        if($request->identifier == 'assistance'){
            $contact->type = 'assistance';
            $contact->name = $request->req_name;
            $contact->email = $request->req_email;
            $contact->phonenumber = $request->req_phone;
            $contact->orgnmessage =$request->req_organization;
            $contact->save();
            \Mail::to('info@upesi.co.ke')->queue(new FormSubmitasst($contact));
            return  response('Successfully sent message, we will get back to you shortly',200);
        }
        // return $request;
    }
}
