<?php

namespace App\Http\Controllers\API;

use App\Career;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareerController extends Controller
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

            return Career::all();
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
        $attributes = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'application_url' => 'required'
        ]);
        Career::create($attributes);
        return ['message' => 'Successfully created'];
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
        $crr = Career::findOrFail($id);
        $attributes = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'application_url' => 'required'
        ]);
        $crr->update($attributes);
        return ['message' => 'Career updated successfully'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::findOrFail($id);

        $career->delete();

        return ['message' => 'Value deleted!'];
    }
}
