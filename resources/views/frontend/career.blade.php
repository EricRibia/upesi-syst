@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('images/img/upesi/career.jpg');">
        <div class="wrapper">
            
                
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-service">
                    <section id="description">
                        <div class="main_title_2">
                            <span><em></em></span>
                                <h2>Careers</h2>
                                            
                        </div>

                        <p class="text-center">Upesi Money Transfer is an equal opportunity employer. All our employment opportunities will be shared on this website. </p>
                        <br>
                        <p class="text-center">There are currently no open job openings at the moment. </p>
                                            <!--<div class="row">
                                                
                                                    <div class="col-md-4">
                                                        <img src="http://via.placeholder.com/300x180/ccc/fff/1_carousel.jpg" style="width:100%;">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h4>Job Title</h4>
                                                        
                                                        <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                                        </p>
                                                        <a href="#0" class="btn_1 rounded">Apply Now</a>
                                                    </div>
                                                </div>-->

                        </section>
                        
                        
                        <div id="root">
                            <div class="container">
                                @foreach($response as $value)
                                <div class="job-card">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h5>{{$value->title}}</h5>
                                            <p>{{$value->description}}</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <h6 class="text-center mtp-15">{{$value->location}}</h6>
                                        </div>
                                        <div class="col-sm-4">
                                            <a target="blank" class="btn_1 rounded full-width" href="{{$value->application_url}}">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div><!-- Content Service End -->
                </div>
                <!-- /col -->
                
                
            </div>
            <!-- /row -->
           


                
        <!-- /container -->
    </section>
    <!-- End Section Content-->

    <!--Start of How it Works Section-->
    @include('frontend.inc.how-it-works')
    <!--End of How it Works Section-->
        <!-- Start Of Download App Section -->
    <?php
    //include('frontend.inc.download-app')
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