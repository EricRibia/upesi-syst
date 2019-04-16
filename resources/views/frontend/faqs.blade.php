@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('images/img/upesi/faqs.jpg');">
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
                                <h2>FAQs</h2>
                                            
                        </div>
                

                <div role="tablist" class="add_bottom_45 accordion_2" id="payment">
                @php
                    $index = 1;
                    @endphp
                @foreach( $faqs as $faq)
                    <div class="card">
                    
                     @if ($loop->first)
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">  
                                <a data-toggle="collapse" href="#register" aria-expanded="true"><i class="indicator ti-minus"></i>{{$index++}} {{$faq->title}}</a>                                                                             
                            </h5>
                        </div>
                        <div id="register" class="collapse show" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>{{$faq->description}}</p>
                            </div>
                        </div>
                        @else 
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#{{$faq->looppicker}}" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>{{$index++}} {{$faq->title}}
                                </a>
                            </h5>
                        </div>
                        <div id="{{$faq->looppicker}}" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>{{$faq->description}}</p>
                            </div>
                        </div>
                        @endif
                    </div>
                    {{-- <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#charge" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>3. How much do you charge?
                                </a>
                            </h5>
                        </div>
                        <div id="charge" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>we charge  0 amount to send money</p>
                            </div>
                        </div>
                    </div> --}}
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
    @include('frontend.inc.get-started-solid');
    <!--End of Get Started Section-->


    




</main>
<!-- /main -->

	
	<!-- Start Of Footer Section -->
    @include('frontend.inc.footer')
@endsection