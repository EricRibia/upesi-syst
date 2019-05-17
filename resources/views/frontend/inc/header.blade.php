<header class="header fadeInDown">
    <div id="logo">
        <a href="/"><img src="{{ asset('images/img/upesi/upesi-logo.png') }}" width="149" height="50" data-retina="true" alt=""></a>
    </div>
    <ul id="top_menu">
        <li><a href="{{url('about-us')}}" class="login">About Us</a></li>
        <li><a href="{{url('services')}}" class="login">Our Services</a></li>
        <li><a href="{{url('networks')}}" class="login">Our Networks</a></li>
        <li><a href="{{url('contact')}}" class="login">Contact Us</a></li>
        <li class="hidden_tablet"><a href={{$sendmoneylink->url}}  target="blank" class="btn_1 rounded">SEND MONEY</a></li>
        {{-- @if (Auth::check())      
        <li class="hidden_tablet"><a href="{{url('/dashboard')}}"  class="btn_1 rounded">Dashboard</a></li>
        @endif --}}
        <li>
            <div class="hamburger hamburger--spin">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </li>
    </ul>
    <!-- /top_menu -->
</header>
<div class="container form-msgs">
@include('layouts.messages')
</div>
<!-- /header -->

<div id="main_menu">
    <div class="container">
    <nav class="version_2">
            <div class="row">
                <div class="col-md-3">
                    <h3>Pages</h3>
                    <ul>
                        <li><a href="{{url ('about-us')}}">About Us</a></li>
                        <li><a href="{{url ('team')}}">Our Team</a></li>
                        <li><a href="{{url ('careers')}}">Careers</a></li>
                        <li><a href="{{url ('services')}}">Our Services</a></li>
                        <li><a href="{{url ('networks')}}">Our Networks</a></li>
                        <li><a href="{{url ('how-it-works')}}">How It Works</a></li>
                        <li><a href="{{url ('contact')}}">Contact Us</a></li>
                        {{-- <li><a href="{{url ('dashboard')}}">Dashboard</a></li> --}}
                        
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Policies</h3>
                    <ul>
                        <li><a href="{{ url('faqs')}}">FAQs</a></li>
                        <li><a href="{{ url('privacy-policy')}}">Privacy Policy</a></li>
                        <li><a href="{{ url('terms-use')}}">Terms of Use</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                    
                </div>
            </div>
            <!-- /row -->
        </nav>
        <div class="follow_us">
            <ul>
                <li>Follow us</li>
                        <li><a href="https://www.facebook.com/UpesiMoneyTransferLimited/?modal=suggested_action" target="_blank"><img src="{{ asset('images/img/upesi/fb.png') }}"></a></li>
                        <li><a href="https://twitter.com/UpesiMoney" target="_blank"><img src="{{asset('images/img/upesi/twitter.png') }}"></a></li>
                        <li><a href="https://www.linkedin.com/company/18788436/admin/updates/" target="_blank"><img src="{{ asset('images/img/upesi/linkedin.png') }}"></a></li>
                        <li><a href="https://www.instagram.com/upesi_money_transfer/" target="_blank"><img src="{{ asset('images/img/upesi/instagram.png') }}"></a></li>
            </ul>
        </div>
    </div>
    
</div>
<!-- /main_menu -->
