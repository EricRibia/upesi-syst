@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('images/img/upesi/bank-deposit-bg.jpg');">
        <div class="wrapper">
            images/
                
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
                                <h2>Cash Pickups</h2>
                                            
                        </div>
                        
                        <p class="text-center">Pick cash from any of our branches or partners in Kenya, Uganda and UK
                        </p>
                        

                                <!-- Start of Partner Logos Section -->
                                <section class="features-section">
                                    <div class="container">
                                        <div class="main_title_2">
                                            <span><em></em></span>
                                            <h2>Countries Available</h2>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                            <section class="customer-logos slider">
                                               <div class="slide"><a href="kenya.php"><img src="images/img/upesi/kenya.png"><p class="text-center">Kenya</p></a></div>
                                              <div class="slide"><a href="uganda.php"><img src="images/img/upesi/uganda.png"><p class="text-center">Uganda</p></a></div>
                                              <div class="slide"><a href="tanzania.php"><img src="images/img/upesi/tanzania.png"><p class="text-center">Tanzania</p></a></div>
                                              <div class="slide"><a href="ethiopia.php"><img src="images/img/upesi/ethiopia.png"><p class="text-center">Ethiopia</p></a></div>
                                          
                                              
                                           </section>
                                        </div>
                                    </div>
                                </section>
                                <!-- End of Partner Logos Section -->
                                
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
    @include('frontend.inc.how-it-works')
    ?>
    <!--End of How it Works Section-->

    <!-- Start Of Download App Section -->
    <?php
    //include('inc/download-app.php');
    ?>
    <!-- Start Of End App Section -->

    <!--Start of Get Started Section-->
    <?php
    @include('frontend.inc.get-started-solid')
    ?>
    <!--End of Get Started Section-->


    




</main>
<!-- /main -->
	
	<!-- Start Of Footer Section -->
    @include('frontend.inc.footer')
@endsection