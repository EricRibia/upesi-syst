<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country; 
class CountryController extends Controller
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

            return Country::all();
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
            'name' => 'required|string',
            'intro' => 'required|string',
        ]);

        $logo = time().'.' . explode('/', explode(':', substr($request->logo, 0, strpos($request->logo, ';')))[1])[1];
            \Image::make($request->logo)->save(public_path('img/country-logo/').$logo);
        $bimage = time().'.' . explode('/', explode(':', substr($request->bimage, 0, strpos($request->bimage, ';')))[1])[1];
        \Image::make($request->bimage)->save(public_path('img/country-bk/').$bimage);

        $country = new Country;
        $country->name = $request->input('name');
        $country->logo = $logo;
        $country->intro = $request->input('intro');
        $country->bimage = $bimage;
        $country->save();
        // $value['value'] = 'value';
        // return About::create([
        //     'title' => $request['title'],
        //     'description' => $request['description'],
        //     'type' => $value['value']
        // ]);
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
        
        $country = Country::findOrFail($id);
        $this->validate( $request, [
            'name' => 'required|string',
            'intro' => 'required|string',
        ]);
        $currentlogo= $country->logo;
        $currentbimage = $country->bimage;

        if( $request->logo != $currentlogo){
            $logoo = time().'.' . explode('/', explode(':', substr($request->logo, 0, strpos($request->logo, ';')))[1])[1];
                \Image::make($request->logo)->save(public_path('img/country-logo/').$logoo);
 
            $request->merge( ['logo' => $logoo] );
            $userPhoto = public_path('img/country-bk/').$currentlogo;

            if( file_exists($userPhoto)){
                @unlink($userPhoto);
            }
            $bk = time().'.' . explode('/', explode(':', substr($request->bimage, 0, strpos($request->bimage, ';')))[1])[1];
            \Image::make($request->bimage)->save(public_path('img/country-bk/').$bk);

            $request->merge( ['bimage' => $bk] );
            $userBimage = public_path('img/country-bk/').$currentbimage;

            if( file_exists($userBimage)){
                @unlink($userBimage);
            }
        }else{
            $logoo = $request->input('logo');
            $bk = $request->input('bimage');
        }
       
        $country->name = $request->input('name');
        $country->logo = $logoo;
        $country->intro = $request->input('intro');
        $country->bimage = $bk;
        $country->update($request->all());
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
        $country = country::findOrFail($id);

        $country->delete();

        return ['message' => 'Value deleted!'];
    }
}
