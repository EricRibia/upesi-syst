<?php

namespace App\Http\Controllers\API;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
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

            return Slider::all();
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
        $user = auth('api')->user();
        $this->validate( $request, [
            'title' => 'required',
            'info' => 'required',
        ]);
        $currentphoto = $user->photo;

        if( $request->img != $currentphoto ){
            $name = time().'.' . explode('/', explode(':', substr($request->img, 0, strpos($request->img, ';')))[1])[1];
            \Image::make($request->img)->save(public_path('img/sliders/').$name);
        }
        $slider = new Slider;
        $slider->title = $request->input('title');
        $slider->info = $request->input('info');
        $slider->img = $name;
        $slider->looppicker = substr($request->input('title'),0,4).'_'.rand(1, 1000);
        $slider->save();
        return ['message' => 'Successfully saved'];
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        {
            // $slider = slider::findOrFail($id);
            $this->validate( $request, [
                'info' => 'required',
                'title' => 'required',
            ]);
            $currentphoto = $slider->img;
    
            if( $request->img != $currentphoto ){
                $name = time().'.' . explode('/', explode(':', substr($request->img, 0, strpos($request->img, ';')))[1])[1];
                \Image::make($request->img)->save(public_path('img/sliders/').$name);
    
                $request->merge( ['img' => $name] );
                $userPhoto = public_path('img/sliders/').$currentphoto;
                if( file_exists($userPhoto)){
                    @unlink($userPhoto);
                }
            }else{
                $name = $request->input('photo');
            }
            $slider->title = $request->input('title');
            $slider->info = $request->input('info');
            $slider->img = $name;
            $slider->update($request->all());
            return ['message' => 'Successfully updated'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return ['message' => 'Slider deleted!'];
    }
}
