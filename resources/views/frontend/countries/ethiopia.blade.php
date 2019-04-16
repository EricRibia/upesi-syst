@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('images/img/upesi/ethiopia-bg.jpg');">
        <div class="wrapper">
            
                <div class="country-heading">
                    <div class="container">
                    <h2 class="fadeInUp text-white">Send Money to Ethiopia</h2>
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
                        <p>Ethiopia is a country that is located in what is known as the Horn of Africa. Its official name is the Federal Democratic Republic of Ethiopia. This African country is the 27th largest in the world by area, which measure 426,400 square miles. The country's population exceeds 100 million, making it the 12th most populous in the world.
                        </p>
                        <p>People remitting to Ethiopia are mainly the migrants who have moved abroad to seek employment.  The senders of outflows are people employed there, individuals, or students. Most of these people send for investment, family up keep, education, and housing. Outflows are done through banks that have partnered with MTO’s from other regions/countries. The government has imposed its regulations with limits to send money; therefore people here opt to use the black market more. 


                        </p>
                        <h3 class="margin-b-25">How to send money in Ethiopia</h3>
                        
                        <h5>1. Bank Transfers</h5>
                        <ul class="list_ok">
                            <li>
                                <p>Transfer funds to all banks in Ethiopia within 1 working day</p>
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
                                <p>Collect cash instantly at UBSC Banks branches</p>
                            </li>
                            
                        </ul>
                        <!-- Start of Logos Section -->
                    
                            <div class="row">
                                
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/united-bank.jpg">
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