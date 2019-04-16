@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('images/img/upesi/send-money.jpg');">
        <div class="overlay">
            <div class="wrapper">
                
                <div class="heading-content">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                            <h2 class="text-white">We have friends in many places. All for your benefit.</h2>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
    </section>
    <!--/hero_in-->

        <section class="section-content">
        <!--<nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <ul class="clearfix">
                    <li><a href="#description" class="active">How to Send Money</a></li>
                    <li><a href="#lessons">How It Works</a></li>
                    <li><a href="#reviews">Download App</a></li>
                    <li><a href="#reviews">Get Started</a></li>
                </ul>
            </div>
        </nav>-->
        <div class="container">
            <div class="main_title_2">
                            <span><em></em></span>
                                <h2>Send Money To</h2>
                                            
                        </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    
                    <div class="row">
                <div class="col-lg-3 col-6">
                    <a href="{{url ('kenya')}}">
                    <img src="{{ asset('images/img/upesi/kenya.png') }}" class="center-image">
                    <p class="text-center">Kenya</p>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="{{url ('uganda')}}">
                    <img src="{{ asset('images/img/upesi/uganda.png') }}" class="center-image">
                    <p class="text-center">Uganda</p>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="{{url ('tanzania')}}">
                    <img src="{{ asset('images/img/upesi/tanzania.png') }}" class="center-image">
                    <p class="text-center">Tanzania</p>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="{{url ('rwanda')}}">
                    <img src="{{ asset('images/img/upesi/rwanda.png') }}" class="center-image">
                    <p class="text-center">Rwanda</p>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="ethiopia">
                    <img src="{{ asset('images/img/upesi/ethiopia.png') }}" class="center-image">
                    <p class="text-center">Ethiopia</p>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="{{url ('ghana')}}">
                    <img src="{{ asset('images/img/upesi/ghana.png') }}" class="center-image">
                    <p class="text-center">Ghana</p>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="{{url ('nigeria')}}">
                    <img src="{{ asset('images/img/upesi/nigeria.png') }}" class="center-image">
                    <p class="text-center">Nigeria</p>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="{{url ('india')}}">
                    <img src="{{ asset('images/img/upesi/india.png') }}" class="center-image">
                    <p class="text-center">India</p>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="{{url ('usa')}}">
                    <img src="{{ asset('images/img/upesi/usa.png') }}" class="center-image">
                    <p class="text-center">Usa</p>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="{{url ('canada')}}">
                    <img src="{{ asset('images/img/upesi/canada.png') }}" class="center-image">
                    <p class="text-center">Canada</p>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="{{url ('australia')}}">
                    <img src="{{ asset('images/img/upesi/australia.png') }}" class="center-image">
                    <p class="text-center">Australia</p>
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="{{url ('europe')}}">
                    <img src="{{ asset('images/img/upesi/european-union.png') }}" class="center-image">
                    <p class="text-center">Europe</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-2">
                        </div>
                
                
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- End Section Content-->

    <!--Start of How it Works Section-->
    @include('frontend.inc.how-it-works')
    <!--End of How it Works Section-->

    <!-- Start Of Download App Section -->
    <?php
    //include('inc/download-app.php');
    ?>
    <!-- Start Of End App Section -->

    <!--Start of Get Started Section-->
    @include('frontend.inc.get-started-solid')
    <!--End of Get Started Section-->


    




</main>
<!-- /main -->

	
	<!-- Start Of Footer Section -->
    @include('frontend.inc.footer')
@endsection