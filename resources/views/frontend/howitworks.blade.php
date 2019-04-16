@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('images/img/upesi/how-it-works-bg.jpg');">
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
                                <h2>How It Works</h2>
                                            
                        </div>
                        
                        <p>You can send money from our website or using our application, from Google Play or Apps Store.
                        </p>
                        <p>To use our website, you need to register with us. It is fast and easy. We are required by the regulator to collect some basic information and set-up details about you. Once registration is complete, you will be able to send money anytime. 
                        </p>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row padding-20">
                                    <div class="col-lg-3">
                                        <img src="images/img/upesi/location.png" class="center-image features-icon">
                                    </div>
                                    <div class="col-lg-9">
                                        <h5>1. Choose the country</h5>
                                        <p>Choose the country and enter the amount you want to send (Our fees and exchange rate will be displayed)</p>
                                    </div>
                                </div>
                            </div><!-- End of col-->
                            <div class="col-lg-6">
                                <div class="row padding-20">
                                    <div class="col-lg-3">
                                        <img src="images/img/upesi/recipient.png" class="center-image features-icon">
                                    </div>
                                    <div class="col-lg-9">
                                        <h5>2. Enter recipient details</h5>
                                        <p>Enter the recipient details and the mode of receiving the funds</p>
                                    </div>
                                </div>
                            </div><!-- End of col-->
                            <div class="col-lg-6">
                                <div class="row padding-20">
                                    <div class="col-lg-3">
                                        <img src="images/img/upesi/payment.png" class="center-image features-icon">
                                    </div>
                                    <div class="col-lg-9">
                                        <h5>3. Select the mode of payment</h5>
                                        <p>Select the mode of payment i.e Debit/Credit card, bank account, mobile wallet account</p>
                                    </div>
                                </div>
                            </div><!-- End of col-->
                            <div class="col-lg-6">
                                <div class="row padding-20">
                                    <div class="col-lg-3">
                                        <img src="images/img/upesi/amount.png" class="center-image features-icon">
                                    </div>
                                    <div class="col-lg-9">
                                        <h5>4. Confirm amount</h5>
                                        <p>Confirm the amount and send</p>
                                    </div>
                                </div>
                            </div><!-- End of col-->
                        </div>
                        

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
    <?php
    //include('inc/how-it-works.php');
    ?>
    <!--End of How it Works Section-->

    <!-- Start Of Download App Section -->
    <?php
    //include('inc/download-app.php');
    ?>
    <!-- Start Of End App Section -->

    <!--Start of Get Started Section-->
    @include('frontend.inc.get-started')
    <!--End of Get Started Section-->


    




</main>
<!-- /main -->

	
	<!-- Start Of Footer Section -->
    @include('frontend.inc.footer')
@endsection