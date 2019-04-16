@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific servBk" style="background: url(images/img/upesi/services-bg.jpg) !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;">
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
                                <h2>Our Services</h2>
                                            
                        </div>
                            
                            <div class="row">
                                <div class="col-sm">
                                    <div class="box_grid">
                                        <figure>
                                            <a href="bank-deposits">
                                                <div class="preview"><span>View Service</span></div><img src="{{ asset('images/img/upesi/bank-home.jpg') }}" class="img-fluid" alt=""></a>
                                        </figure>
                                        <div class="wrapper">
                                            
                                            <h3>Bank deposits</h3>
                                            <p>Receive instant bank transactions to banks in Kenya, Uganda, Tanzania, Rwanda, Nigeria, Ghana and Ethiopia</p>
                                            <a href="bank-deposits" class="btn_1 rounded full-width add_top_30">Read More</a>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="box_grid">
                                        <figure>
                                            <a href="cash-pickups">
                                                <div class="preview"><span>View Service</span></div><img src="{{asset ('images/img/upesi/bank-deposit-home.jpg') }}" class="img-fluid" alt=""></a>
                                        </figure>
                                        <div class="wrapper">
                                            
                                            <h3>Cash Pick Ups</h3>
                                            <p>Pick cash from any of our branches or partners in Kenya, Uganda, Tanzania and Ethiopia</p>
                                            <a href="cash-pickups" class="btn_1 rounded full-width add_top_30">Read More</a>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="box_grid">
                                        <figure>
                                            <a href="mobile-wallets">
                                                <div class="preview"><span>View Service</span></div><img src="{{ asset('images/img/upesi/mobile-transfer-home.jpg') }}" class="img-fluid" alt=""></a>
                                        </figure>
                                        <div class="wrapper">
                                            
                                            <h3>Mobile Wallets</h3>
                                            <p>Receive money on your phone instantly through our mobile money partners in Kenya, Uganda, Tanzania..</p>
                                            <a href="mobile-wallets" class="btn_1 rounded full-width add_top_30">Read More</a>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="box_grid">
                                        <figure>
                                            <a href="bill-payments">
                                                <div class="preview"><span>View Service</span></div><img src="{{ asset('images/img/upesi/bill-payments-home.jpg') }}" class="img-fluid" alt=""></a>
                                        </figure>
                                        <div class="wrapper">
                                            
                                            <h3>Direct bill payments</h3>
                                            <p>Pay your utility bills anytime, from anywhere in the world, Pay hospital bills, Pay school fees at anytime</p>
                                            <a href="bill-payments" class="btn_1 rounded full-width add_top_30">Read More</a>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div><!-- End of Services Box -->
                                            
                    </section>
                        
                        

                    </div><!-- Content Service End -->
                </div>
                <!-- /col -->
                
                
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