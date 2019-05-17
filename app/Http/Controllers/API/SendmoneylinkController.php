<?php

namespace App\Http\Controllers\API;
use App\Sendmoneylink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SendmoneylinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function index()
    {
        if(\Gate::allows('isAdmin') || \Gate::allows('isAuthor') ){

            return Sendmoneylink::all();
        }
    }
    public function update(Request $request, $id)
    {
        $crr = Sendmoneylink::findOrFail($id);
        $attributes = $request->validate([
            'website' => 'required|string',
            'url' => 'required|string'
        ]);
        $crr->update($attributes);
        return ['message' => 'Sendmoney link updated successfully'];
    }
}
