<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;
class TeamController extends Controller
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

            return Team::all();
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
            'name' => 'required',
            'title' => 'required',
        ]);
        $currentphoto = $user->photo;

        if( $request->photo != $currentphoto ){
            $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            \Image::make($request->photo)->save(public_path('img/team/').$name);
        }
        $team = new Team;
        $team->title = $request->input('title');
        $team->name = $request->input('name');
        $team->info = $request->input('info');
        $team->photo = $name;
        $team->looppicker = substr($request->input('name'),0,4).'_'.rand(1, 1000);
        $team->save();
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
        $team = Team::findOrFail($id);
        $this->validate( $request, [
            'name' => 'required',
            'title' => 'required',
        ]);
        $currentphoto = $team->photo;

        if( $request->photo != $currentphoto ){
            $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            \Image::make($request->photo)->save(public_path('img/team/').$name);

            $request->merge( ['photo' => $name] );
            $userPhoto = public_path('img/team/').$currentphoto;
            if( file_exists($userPhoto)){
                @unlink($userPhoto);
            }
        }else{
            $name = $request->input('photo');
        }
        $team->title = $request->input('title');
        $team->name = $request->input('name');
        $team->info = $request->input('info');
        $team->photo = $name;
        $team->update($request->all());
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
        $team = Team::findOrFail($id);

        $team->delete();

        return ['message' => 'Value deleted!'];
    }
}
