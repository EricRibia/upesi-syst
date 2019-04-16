@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('../img/country-bk/<?php echo $country->bimage ?>');">
        <div class="wrapper">
            
                <div class="country-heading">
                    <div class="container">
                    <h2 class="fadeInUp text-white">Send Money to {{$country->name}}</h2>
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
                        <p>
                        {{$country->intro}}
                        </p>
                        @if($bt)
                        <div>
                        <h3 class="margin-b-25">How to send money in {{$country->name}}</h3>
                        
                        <h5>{{$bt->type}}</h5>
                        <ul class="list_ok">
                            @foreach( explode("|",$bt->info) as $point)
                            <li>
                                <p>{{$point}}</p>
                            </li>
                            @endforeach
                        </ul>
                        <!-- Start of Logos Section -->
                            @if($bt->pimages)
                            <div class="row">
                                @foreach($bt->pimages as $imgs)
                                <div class="col-lg-2 col-6">
                                    <img src="{{asset('storage/'.$imgs->img)}}">
                                </div>
                                @endforeach
                                
                            </div>
                            @endif
                        
                        <!-- End of Logos Section -->
                        <hr>
                        @if($cp)
                        <h5>{{$cp->type}}</h5>
                        <ul class="list_ok">
                                @foreach( explode("|",$cp->info) as $point)
                                <li>
                                    <p>{{$point}}</p>
                                </li>
                                @endforeach
                        </ul>
                        
                        <!-- Start of Logos Section -->
                    
                        @if($cp->pimages->count())
                        <div class="row">
                            @foreach($cp->pimages as $imgs)
                            <div class="col-lg-2 col-6">
                                <img src="{{asset('storage/'.$imgs->img)}}">
                            </div>
                            @endforeach
                            
                        </div>
                        @endif
                        
                        <!-- End of Logos Section -->
                        <hr>
                        @endif
                        @if($mw)
                        <h5>{{$mw->type}}</h5>
                        <ul class="list_ok">
                                @foreach( explode("|",$mw->info) as $point)
                                <li>
                                    <p>{{$point}}</p>
                                </li>
                                @endforeach
                        </ul>
                        
                        <!-- Start of Logos Section -->
                        
                        @if(count($mw->pimages))
                        <div class="row">
                            @foreach($mw->pimages as $imgs)
                            <div class="col-lg-2 col-6">
                                <img src="{{asset('storage/'.$imgs->img)}}">
                            </div>
                            @endforeach
                            
                        </div>
                        @endif
                        
                        <!-- End of Logos Section -->
                        <hr>	
                        @endif	
                    </div>		
                        @endif		
                    
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