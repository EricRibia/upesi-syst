<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About; 
use App\User; 
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
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

            return About::all();
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
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
        $about = new About;
        $about->title = $request->input('title');
        $about->description = $request->input('description');
        $about->type = 'value';
        $about->valname = substr($request->input('title'),0,4).'_'.rand(1, 1000);
        $about->save();
        // $value['value'] = 'value';
        // return About::create([
        //     'title' => $request['title'],
        //     'description' => $request['description'],
        //     'type' => $value['value']
        // ]);
        return ['message' => 'Successfully updated'];
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
        $about = About::findOrFail($id);

        $this->validate( $request, [
            'title' => 'required|string',
            'description' => 'required|string',
     ]);
        $about->title = $request->input('title');
        $about->description = $request->input('description');
        $about->update( $request->all() );
        return ['message' => 'User updated successfully'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);

        $about->delete();

        return ['message' => 'Value deleted!'];
    }
}
