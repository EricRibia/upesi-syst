@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('images/img/upesi/canada-bg.jpg');">
        <div class="wrapper">
            
                <div class="country-heading">
                    <div class="container">
                    <h2 class="fadeInUp text-white">Send Money to Canada</h2>
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
                        <p>Canada is a North American country stretching from the U.S. in the south to the Arctic Circle in the north. It has a population of around 36.29 million as at 2016. 
                        </p>
                        <p>It's also home to Niagara Falls, a famous group of massive waterfalls. Did you also know, many people living in Canada are often immigrants who send international money transfers, also known as remittances, to relatives or friends living in other countries? In 2016, an estimated 1.6 million Canadian households sent at least $500 to their relatives or friends living outside Canada, with transfer amounts averaging $1,823 per household in that year.
                        </p>
                        <p>The money sent from Canada helps people pay for anything from food and education to medical expenses and crisis relief. Sometimes people are even able to use money from international transfers to improve their economic situation by investing in higher learning or entrepreneurial activities.
                        </p>
                                                
                    
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