<?php

namespace App\Http\Controllers\API;
use App\Howork;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HoworkController extends Controller
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

            return Howork::all();
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
        $user = auth('api')->user();
        $this->validate( $request, [
            'title' => 'required',
            'info' => 'required',
            'number' => 'required',
        ]);
        $currentphoto = $user->photo;

        if( $request->photo != $currentphoto ){
            $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            \Image::make($request->photo)->save(public_path('img/howork/').$name);
        }
        $howork = new Howork;
        $howork->icon = $name;
        $howork->title = $request->input('title');
        $howork->number = $request->input('number');
        $howork->info = $request->input('info');
        // $howork->looppicker = substr($request->input('name'),0,4).'_'.rand(1, 1000);
        $howork->save();
        return ['message' => 'Successfully saved'];
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
        $howork = Howork::findOrFail($id);
        $this->validate( $request, [
            'title' => 'required',
            'info' => 'required',
            'number' => 'required',
        ]);
        $currentphoto = $howork->icon;

        if( $request->photo != $currentphoto ){
            $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            \Image::make($request->photo)->save(public_path('img/howork/').$name);

            $request->merge( ['icon' => $name] );
            $userPhoto = public_path('img/howork/').$currentphoto;
            if( file_exists($userPhoto)){
                @unlink($userPhoto);
            }
        }else{
            $name = $request->input('icon');
        }
        $howork->icon = $name;
        $howork->title = $request->input('title');
        $howork->number = $request->input('number');
        $howork->info = $request->input('info');
        $howork->update($request->all());
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
        $howork = Howork::findOrFail($id);

        $howork->delete();

        return ['message' => 'Value deleted!'];
    }
}
