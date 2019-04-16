<?php

namespace App\Http\Controllers\API;
use App\Pimage;
use App\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PimageController extends Controller
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

            return Pimage::all();
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
        // $uploadedfile = $request->pics;
        // foreach($uploadedfile as $f){
        //     $f->store('payment');
        // }
        // return response([
        //     'status'=>200,
        //     'addedDepartments'=>$request->pics,
        //     'message'=>'Departments successfully created'
        // ]); 
        $photos = $request->pics;
        $paths  = [];
        $payment_filter =  ['name' => $request->imageData, 'type' => $request->imagetype];
        $p_id = Payment::where($payment_filter)->first();
        foreach ($photos as $photo) {
            // $extension = $photo->getClientOriginalExtension();
            // $filename  = 'payment-logos' . time() . '.' . $extension;
            // $paths[]   = $photo->storeAs('plogos', $filename);
           $file = $photo->store('plogos');

            $pimage = new Pimage;
            $pimage->payment_id = $p_id->id;
            $pimage->country = $request->imageData;
            $pimage->type = $request->imagetype;
            $pimage->img = $file;
            $pimage->save();
        }
    
        return  response()->json('successfully created',201);
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
        $pimg = Pimage::findOrFail($id);

        $pimg->delete();

        return ['message' => 'Value deleted!'];
    }
}
