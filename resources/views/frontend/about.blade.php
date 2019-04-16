@extends('frontend.master')
@section('content')
<main>
<section class="country-specific" style="background:url('images/img/upesi/about-us.jpg');">
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
                                <h2>About the Company</h2>
                                            
                        </div>
                       
                        {!! nl2br(e($introd[0])) !!}
                        {{-- <p>Upesi is a homegrown African solution that enables efficient, reliable and affordable global money transfer. The Company is currently licensed in Kenya by the Central Bank of Kenya (CBK), and in the UK by the Financial Conduct Authority (FCA).
                        </p>
                        <p>Having been incorporated in 2015 in Kenya, Upesi Money Transfer Limited started operations in Kenya in January 2016 upon issuance of the license by the Central Bank of Kenya. Upesi Money Transfer has also started the process of registering as money Transfer Company in other countries in the East African region.
                        </p>
                        <p>Since its inception Upesi Money Transfer Limited has experienced remarkable growth and is strategically placed for growth in the remittance space. 
                        The strength of our partnerships has contributed to the speedy growth of Upesi Money Transfer Limited.
                        </p> --}}
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <a class="box_feat box-values" href="#">
                                    <i class="fa fa-bullseye"></i>
                                    <h3>Mission</h3>
                                    <p>{{$m->description}}</p>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <a class="box_feat box-values" href="#">
                                    <i class="fa fa-eye"></i>
                                    <h3>Vision</h3>
                                    <p>{{$v->description}}</p>
                                </a>
                            </div>
                        </div>

                        <div class="main_title_2">
                            <span><em></em></span>
                                <h2>Values</h2>
                                            
                        </div>
                        <p>Our values, which hold the key to our success, are what define who we are. Most importantly, as a company we value:</p>

                <div role="tablist" class="add_bottom_45 accordion_2" id="payment">
                @foreach( $values as $value)
                    {{-- <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#{{$value->valname}}" aria-expanded="true"><i class="indicator ti-minus"></i>{{$value->title}}</a>
                            </h5>
                        </div>

                        <div id="{{$value->valname}}" class="collapse show" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>{{$value->description}}</p>
                            </div>
                        </div>
                    </div>
                  --}}
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#{{$value->valname}}" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>{{$value->title}}
                                </a>
                            </h5>
                        </div>
                        <div id="{{$value->valname}}" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>{{$value->description}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                 @endforeach
                </div>
                <!-- /accordion payment -->

                        
                        

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