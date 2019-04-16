@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('images/img/upesi/kilimanjaro.jpg');">
        <div class="wrapper">
            
                <div class="country-heading">
                    <div class="container">
                    <h2 class="fadeInUp text-white">Send Money to Tanzania</h2>
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
                        <p>Tanzania was called Tanganyika before it merged with the island of Zanzibar. Soon after the merge, a clipped compound of the name of the two states created the name Tanzania. Tanzania has a population of 58 million. Mount Kilimanjaro, the highest mountain in Africa, is also a dormant volcano. It stands approximately 19,341 ft (5,895 meters) tall.
                        </p>
                        <p>Remittances to Tanzania are mainly for family up-keep, education, tourism and investment purposes. Trends in the way people receive money are fast changing from Bank deposits to mobile wallet transfer. The emergence of mobile money has triggered an increase in remittances received in the country. 


                        </p>
                        <h3 class="margin-b-25">How to send money in Tanzania</h3>
                        
                        <h5>1. Bank Transfers</h5>
                        <ul class="list_ok">
                            <li>
                                <p>Transfer funds to all banks in Tanzania within 1 working day</p>
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
                                <p>Collect cash at our over 17 pick-up locations at Akiba bank and Equity bank in Tanzania.</p>
                            </li>
                            
                        </ul>
                        <!-- Start of Logos Section -->
                    
                            <div class="row">
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/akiba.jpg">
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
                                <p>Mobile money is sent instantly to MTN and Airtel Tigo</p>
                            </li>
                            
                        </ul>
                        <!-- Start of Logos Section -->
                    
                            <div class="row">
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/mtn.jpg">
                    
                                </div>
                                <div class="col-lg-2 col-6">
                                    
                                    <img src="images/img/upesi/airtel-tigo.jpg">
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