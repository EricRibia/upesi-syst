@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('images/img/upesi/team.jpg');">
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
                                <h2>Our Team</h2>
                                            
                        </div>

                        <div class="row">
                        @foreach($team as $person)
                            <div class="col-md-6 col-lg-4">
                                <a href="#" data-toggle="modal" data-target="#{{$person->looppicker}}">
                                    <div class="team-profile">
                                        <div class="team-pic" style="background:url('img/team/{{$person->photo}}');background-repeat: no-repeat;background-size: cover;"></div>
                                        <div class="team-content">
                                            <h5>{{$person->name}}</h5>
                                            <p>{{$person->title}}</p>
                                        </div>
                                    </div>

                                    
                                </a>
                                <!-- The Modal -->
                                        <div class="modal" id="{{$person->looppicker}}">
                                          <div class="modal-dialog modal-lg">
                                            <div class="modal-content">

                                              

                                              <!-- Modal body -->
                                              <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="img/team/{{$person->photo}}" style="width:100%;">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h5>{{$person->name}}</h5>
                                                        <p>{{$person->title}}</p>
                                                        {{-- <p>
                                                            Mr. Ngumba, the CEO of Upesi Money Transfer Limited, has a wealth of experience in the financial sector and also having been a member of the diaspora. He is well versed with the challenges facing East and Central Africans community abroad especially when it comes to remitting money back home.
                                                        </p>
                                                        <p>
                                                            He recognizes that the global positioning of Africa is at its peak with the major powers competing to get a foothold into the continent and thus his aim is to make a positive impact in Africa by creating a revolution on the money transfer concept with the major aim of ensuring that every stakeholder in the value chain gets the best out of the service provision.
                                                        </p> --}}
                                                        {{$person->info}}
                                                    </div>
                                                </div>
                                              </div>

                                              <!-- Modal footer -->
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                              </div>

                                            </div>
                                          </div>
                                        </div>
                                        <!-- End of Modal -->
                            </div>
                            @endforeach
       
                              
                                            </div>
    
                        
                    </section>
                        
                        

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