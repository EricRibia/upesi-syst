@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('images/img/upesi/nigeria-bg.jpg');">
        <div class="wrapper">
            
                <div class="country-heading">
                    <div class="container">
                    <h2 class="fadeInUp text-white">Send Money to Nigeria</h2>
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
                        <p>Nigeria is a country located in West Africa. The official name of the country is the Federal Republic of Nigeria. The country has a population of 188,462,640 people, making it the 7th most populous country in the world. 
                        </p>
                        <p>In Nigeria, international remittance is a critical source of income for the people and has changed their standard of living to a great extent. Remittance inflow from other countries into Nigeria has resulted in development of the country in many ways. Each year, Nigerian migrants working overseas send billions of dollars back home to support their families. A number of Nigerians migrate to developed countries such as the US, the UK, Spain, Italy and other European and African countries. In terms of transaction volume also, the highest remittances
                        are received from the US and the UK followed by other European countries. International remittance market is a highly competitive market. In Nigeria international remittances are carried out through banks and international MTOs (IMTOs). Banks have the major share in the transfer.
                        </p>
                        <h3 class="margin-b-25">How to send money in Nigeria</h3>
                        
                        <h5>1. Bank Transfers</h5>
                        <ul class="list_ok">
                            <li>
                                <p>Transfer funds to all banks in Nigeria within 1 working day</p>
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
                        <h5>2. Mobile Wallet Transfers</h5>
                        <ul class="list_ok">
                            <li>
                                <p>Mobile money is sent instantly to Paycom Mobile Money, Teasy Mobile Money, ReadyCash Mobile Money, FETS  Mobile Money, GTMobileMoney, QikQik Mobile Money, Fortis Mobile Money, Stanbic MobileMoney, Flash Me Cash, Teasy Mobile Money Payments, Sterling Mobile Money, Pocket moni</p>
                            </li>
                            
                        </ul>
                        <!-- Start of Logos Section -->
                    
                            <div class="row">
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/paycom.jpg">
                    
                                </div>
                                <div class="col-lg-2 col-6">
                                    
                                    <img src="images/img/upesi/teasy-mobile.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    
                                    <img src="images/img/upesi/ready-cash.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    
                                    <img src="images/img/upesi/fets.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    
                                    <img src="images/img/upesi/gtmoney.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    
                                    <img src="images/img/upesi/qikqik.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    
                                    <img src="images/img/upesi/fortis.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    
                                    <img src="images/img/upesi/stanbic.jpg">
                                <div class="col-lg-2 col-6">
                                    
                                    <img src="images/img/upesi/flashme.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    
                                    <img src="images/img/upesi/sterling.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    
                                    <img src="images/img/upesi/pocketmoni.jpg">
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