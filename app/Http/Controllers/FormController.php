<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $contact = new Contact;
        if($request->input('identifier') == 'contact'){
            $contact->type = 'contact';
            $name = $request->input('name');
            $contact->name = $name;
            $contact->email = $request->input('email');
            $contact->phonenumber = $request->input('phone');
            $contact->orgnmessage =$request->input('message');
            $contact->save();
            return  redirect()->back()->with('success','message sent successfully');
        }
        if($request->input('identifier') == 'assistance'){
            $contact->type = 'assistance';
            $contact->name = $request->input('name');
            $contact->email = $request->input('email');
            $contact->phonenumber = $request->input('phone');
            $contact->orgnmessage =$request->input('message');
            $contact->save();
            return  redirect()->back()->with('success','message sent successfully');  
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
