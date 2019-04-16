<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service; 
use Illuminate\Support\Facades\Input;

class ServicesController extends Controller
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

            return Service::all();
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
        $service = new Service;
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->type = 'service';
        $service->save();
        // $value['value'] = 'value';
        // return service::create([
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
        $service = Service::findOrFail($id);

        $this->validate( $request, [
            'title' => 'required|string',
            'description' => 'required|string',
     ]);
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->update( $request->all() );
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
        $service = Service::findOrFail($id);

        $service->delete();

        return ['message' => 'Value deleted!'];
    }
}
