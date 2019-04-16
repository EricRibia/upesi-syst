<?php

namespace App\Http\Controllers\API;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactdisplayController extends Controller
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

            return Contact::all();
        }
    }
    public function destroy($id)
    {
        $about = Contact::findOrFail($id);

        $about->delete();

        return ['message' => 'Item deleted!'];
    }
}
