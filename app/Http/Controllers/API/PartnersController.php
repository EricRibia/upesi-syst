<?php

namespace App\Http\Controllers\API;

use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnersController extends Controller
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

            return Partner::all();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $user = auth('api')->user();
            $this->validate( $request, [
                'url' => 'required',
            ]);
            $currentimg = $user->img;
    
            if( $request->img != $currentimg ){
                $name = time().'.' . explode('/', explode(':', substr($request->img, 0, strpos($request->img, ';')))[1])[1];
                \Image::make($request->img)->save(public_path('img/partners/').$name);
            }
            $partner = new Partner;
            $partner->url = $request->input('url');
            $partner->img = $name;
            $partner->looppicker = substr($request->input('name'),0,4).'_'.rand(1, 1000);
            $partner->save();
            return ['message' => 'Successfully saved'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        {
            $this->validate( $request, [
                'url' => 'required',
            ]);
            $currentimg = $partner->img;
    
            if( $request->img != $currentimg ){
                $name = time().'.' . explode('/', explode(':', substr($request->img, 0, strpos($request->img, ';')))[1])[1];
                \Image::make($request->img)->save(public_path('img/partners/').$name);
    
                $request->merge( ['img' => $name] );
                $userimg = public_path('img/partners/').$currentimg;
                if( file_exists($userimg)){
                    @unlink($userimg);
                }
            }else{
                $name = $request->input('img');
            }
            $partner->url = $request->input('url');
            $partner->img = $name;
            $partner->update($request->all());
            return ['message' => 'Successfully updated'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();

        return ['message' => 'Partner deleted!'];
    }
}
