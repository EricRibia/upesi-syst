<?php

namespace App\Http\Controllers\API;
use App\Payment; 
use App\Country; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Gate::allows('isAdmin') || \Gate::allows('isAuthor') ){

            return Payment::all();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request, [
            'name' => 'required',
            'type' => 'required',
        ]);
        // $uploadedfile = $request->pics;
        // foreach($uploadedfile as $f){
        //     $f->store('payment');
        // }
        $c_id = Country::where('name',$request->input('name'))->pluck('id')->first();
        $payment = new Payment;
        $payment->name = $request->input('name');
        $payment->type = $request->input('type');
        $payment->info = $request->input('info');
        $payment->country_id = $c_id;
        $payment->save();
        return response(['status' => 'success']);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payment = Payment::findOrFail($id);
        $this->validate( $request, [
            'name' => 'required',
            'type' => 'required',
        ]);
        $c_id = Country::where('name',$request->input('name'))->pluck('id')->first();
        $payment->name = $request->input('name');
        $payment->type = $request->input('type');
        $payment->info = $request->input('info');
        $payment->country_id = $c_id;
        $payment->update($request->all());
        return ['message' => 'Successfully updated'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);

        $payment->delete();

        return ['message' => 'Value deleted!'];
    }
}
