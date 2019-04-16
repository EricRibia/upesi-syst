@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('images/img/upesi/kampala.jpg');">
        <div class="wrapper">
            
                <div class="country-heading">
                    <div class="container">
                    <h2 class="fadeInUp text-white">Send Money to Uganda</h2>
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
            <div class="row">
                <div class="col-lg-12">
                    
                    <section id="description">
                        <p>Uganda is a landlocked country that is made up of savannas, mountains, and lakes. The country has a population of almost 38 million, ranking it as the 35th largest country in the world in terms of population. 
                        You can to send money to Uganda for mobile wallet, cash pickup, or bank deposits.

                        </p>
                        <h3 class="margin-b-25">How to send money in Uganda</h3>
                        
                        <h5>1. Bank Transfers</h5>
                        <ul class="list_ok">
                            <li>
                                <p>Transfer funds to all banks in Uganda within 1 working day</p>
                            </li>
                            
                        </ul>
                        <!-- Start of Logos Section -->
        
                            <!--<div class="row">
                                <div class="col-lg-3 col-6">
                                    <img src="img/upesi/barclays.jpg">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="img/upesi/equity.jpg">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="img/upesi/kcb.jpg">
                                </div>
                                
                                <div class="col-lg-3 col-6">
                                    <img src="img/upesi/stanchart.jpg">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="img/upesi/cfc.jpg">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="img/upesi/coop.jpg">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="img/upesi/dtb.jpg">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="img/upesi/im.jpg">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="img/upesi/national.jpg">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="img/upesi/spire.jpg">
                                </div>
                            </div>-->
                        
                        <!-- End of Logos Section -->
                        <hr>
                        <h5>2. Cash pickup</h5>
                        <ul class="list_ok">
                            <li>
                                <p>Collect cash instantly from over 40 cash pickup locations in Uganda at LaCedri and Equity bank.</p>
                            </li>
                            
                        </ul>
                        <!-- Start of Logos Section -->
                    
                            <div class="row">
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/la-cedri.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/equity.jpg">
                                </div>
                                
                                
                            </div>
                        
                        <!-- End of Logos Section -->
                        <hr>
                        <h5>3. Mobile Wallet Transfers</h5>
                        <ul class="list_ok">
                            <li>
                                <p>Mobile money is sent instantly to MTN and Airtel accounts</p>
                            </li>
                            
                        </ul>
                        <!-- Start of Logos Section -->
                    
                            <div class="row">
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/mtn.jpg">
                    
                                </div>
                                <div class="col-lg-2 col-6">
                                    
                                    <img src="images/img/upesi/airtel.jpg">
                                </div>
                                
                                
                            </div>
                        
                        <!-- End of Logos Section -->
                        <hr>						
                    
                </div>
                <!-- /col -->
                
                <?php
                //include('inc/send-money.php');
                ?>
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