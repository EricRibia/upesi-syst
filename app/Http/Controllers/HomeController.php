<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use App\About as About;
use App\Country as Country;
use App\Service as Service;
use App\Policy as Policy;
use App\Team as Team;
use App\Slider as Slider;
use App\Partner as Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home_page(){
        $data['page'] = 'Home | Upesi Money Transfer';
        $data['slides'] = Slider::all();
        $data['partners'] = Partner::all();
        return view('frontend.main',$data);
    }
    public function networks_page(){
        $page = 'Our Networks | Upesi Money Transfer';
        return view('frontend.network',compact('page'));
    }
    public function contact_page(){
        $page = 'Contact Us | Upesi Money Transfer';
        return view('frontend.contact',compact('page'));
    }
    public function how_it_works_page(){
        $page = 'How it works | Upesi Money Transfer';
        return view('frontend.howitworks',compact('page'));
    }
    public function bank_deposits(){
        $page = 'Bank Deposits | Upesi Money Transfer';
        return view('frontend.servic.bank-depo', compact('page'));
    }
    public function cash_pickups(){
        $page = 'Cash pickups | Upesi Money Transfer';
        return view('frontend.servic.cash-pic', compact('page'));
    }
    public function mobile_wallets(){
        $page = 'Mobile Wallebill_paymentsts | Upesi Money Transfer';
        return view('frontend.servic.mobile-wal', compact('page'));
    }
    public function bill_payments(){
        $page = 'Bill payments | Upesi Money Transfer';
        return view('frontend.servic.dir-bil', compact('page'));
    }
    public function about_us()
    { 
        $data=[];
        $data['page'] = 'About | Upesi Money Transfer';
        $data['values'] = About::where('type','value')->get();
        $data['m'] = About::where('valname','m')->first();
        $data['v'] = About::where('valname','v')->first();
        $data['introd']  = About::where('title','About us')->get()->pluck('description');

        return view('frontend.about',$data);
    }
    public function services_page(){
        $data['services'] = Service::where('type','service')->get();
        $data['page']  = 'Services | Upesi Money Transfer';
        return view('frontend.services',$data);
    }
    public function faqs_page(){
        $data['faqs'] = Policy::where('type','faqs')->get();
        $data['page']  = 'FAQs | Upesi Money Transfer';
        return view('frontend.faqs',$data);

    }
    public function privacy_page(){
        $data['privacy_policy'] = Policy::where('title','Privacy Policy')->get()->pluck('description');
        $data['page']  = 'Privacy Policy | Upesi Money Transfer';
        return view('frontend.privacy-policy',$data);
    }
    public function terms_page(){
        $data['terms'] = Policy::where('title','Terms of Use')->get()->pluck('description');
        $data['page']  = 'Terms of Use | Upesi Money Transfer';
        return view('frontend.terms-use',$data);
    }
    public function Team_page(){
        $data['team'] = Team::all();
        $data['page'] = 'Team | Upesi Money Transfer';
        return view('frontend.team',$data);
    }
    public function country_pages($slug){
        $data['country'] = Country::where('name',$slug)->get()->first();
        $data['all'] = Country::all();
        $data['page'] = $slug . ' | Upesi Money Transfer';
        $bt =  ['name' => $slug, 'type' => 'Bank Transfer'];
        $cp =  ['name' => $slug, 'type' => 'Cash Pickup'];
        $mw =  ['name' => $slug, 'type' => 'Mobile Wallets'];
        $data['bt'] = \App\Payment::where($bt)->get()->first();
        $data['cp'] = \App\Payment::where($cp)->get()->first();
        $data['mw'] = \App\Payment::where($mw)->get()->first();
        return view('frontend.countries.country', $data);
    }
    public function index()
    {
        return view('backend.master');
    }

}
