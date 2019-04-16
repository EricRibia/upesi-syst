@extends('frontend.master')
@section('content')
<main>
		<!-- Slider -->
		<div id="full-slider-wrapper">
			<div id="layerslider" style="width:100%;height:550px;">

				<!-- first slide -->
				@foreach($slides as $slide)
				<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
					<img src="{{ asset('img/sliders/'.$slide->img) }}" class="ls-bg" alt="Slide background">
					
						<h4 class="ls-l slide_typo" style="top: 75%;left:50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
						{{$slide->title}}</h4>
						<p class="ls-l slide_typo" style="top:85%;left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
							{{$slide->info}}
						</p>
					
					<!--<a class="ls-l btn_1 rounded" style="top:80%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='courses-grid.html'>Read more</a>-->
				</div>
				@endforeach


				
				<!-- second slide 
				<div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
					<img src="http://via.placeholder.com/1700x750/ccc/fff/slides/slide_3.jpg" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide_typo" style="top: 47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;"><strong>Focus</strong> on improvement </h3>
					<p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
						College | lms | University
					</p>
					<a class="ls-l btn_1 rounded" style="top:65%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='courses-grid.html'>Read more</a>
				</div>
				third slide 
				<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
					<img src="http://via.placeholder.com/1700x750/ccc/fff/slides/slide_1.jpg" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide_typo" style="top:47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;"><strong>Friendly</strong> student community</h3>
					<p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
						College | lms | University
					</p>
					<a class="ls-l btn_1 rounded" style="top:65%; left:50%;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='courses-grid.html'>Explore</a>
				</div>
			-->
			</div>
		</div>
		<!-- End layerslider -->

	<!-- Start Of Services Section -->
	<section class="section-content">
		<div class="container">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Our Services</h2>
				
			</div>

			<div class="row">
				<div class="col-sm">
					<div class="box_grid">
						<figure>
							<a href="bank-deposits">
								<div class="preview"><span>View Service</span></div><img src="{{ asset('images/img/upesi/bank-home.jpg') }}" class="img-fluid" alt=""></a>
						</figure>
						<div class="wrapper">
							
							<h3>Bank deposits</h3>
							<p>Receive instant bank transactions to banks in Kenya, Uganda and UK</p>
							<a href="{{url ('bank-deposits')}}" class="btn_1 rounded full-width add_top_30">Read More</a>
						</div>
						
					</div>
				</div>

				<div class="col-sm">
					<div class="box_grid">
						<figure>
							<a href="cash-pickups">
								<div class="preview"><span>View Service</span></div><img src="{{ asset('images/img/upesi/bank-deposit-home.jpg') }}" class="img-fluid" alt=""></a>
						</figure>
						<div class="wrapper">
							
							<h3>Cash Pick Ups</h3>
							<p>Pick cash from any of our branches or partners in Kenya, Uganda and UK</p>
							<a href="{{ url('cash-pickups')}}" class="btn_1 rounded full-width add_top_30">Read More</a>
						</div>
						
					</div>
				</div>

				<div class="col-sm">
					<div class="box_grid">
						<figure>
							<a href="mobile-wallets">
								<div class="preview"><span>View Service</span></div><img src="{{ asset('images/img/upesi/mobile-transfer-home.jpg') }}" class="img-fluid" alt=""></a>
						</figure>
						<div class="wrapper">
							
							<h3>Mobile Wallets</h3>
							<p>Receive money on your phone instantly through our mobile money..</p>
							<a href="{{url ('mobile-wallets')}}" class="btn_1 rounded full-width add_top_30">Read More</a>
						</div>
						
					</div>
				</div>

				<div class="col-sm">
					<div class="box_grid">
						<figure>
							<a href="bill-payments">
								<div class="preview"><span>View Service</span></div><img src="{{ asset('images/img/upesi/bill-payments-home.jpg') }}" class="img-fluid" alt=""></a>
						</figure>
						<div class="wrapper">
							
							<h3>Direct bill payments</h3>
							<p>Pay your utility bills anytime, from anywhere in the world...</p>
							<a href="{{url ('bill-payments')}}" class="btn_1 rounded full-width add_top_30">Read More</a>
						</div>
						
					</div>
				</div>

			</div>
		
		</div>
		<!-- /container -->

	</section>
	<!-- End of Services Section -->

	

	<!--Start of How it Works Section-->

		@include('frontend.inc.how-it-works')
		<!--End of How it Works Section-->


	
	<!-- Start of Features Section -->
	<section class="features-section">
		<div class="row margin-20-lr">
			<div class="col-sm padding-10">
				<img src="{{ asset('images/img/upesi/24-hours.png') }}" class="center-image features-icon">
				<h4 class="text-center">24 Hr Service</h4>
			</div>
			<div class="col-sm padding-10">
				<img src="{{ asset('images/img/upesi/hotel-bell.png') }}" class="center-image features-icon">
				<h4 class="text-center">Instant Services</h4>
			</div>
			<div class="col-sm padding-10">
				<img src="{{ asset('images/img/upesi/like.png') }}" class="center-image features-icon">
				<h4 class="text-center">Direct Service Offering</h4>
			</div>
			<div class="col-sm padding-10">
				<img src="{{ asset('images/img/upesi/targeting.png') }}" class="center-image features-icon">
				<h4 class="text-center">Simple and Affordable</h4>
			</div>
		</div>
	</section>
	<!-- End of Features Section -->


	<!-- Start Of Testimonials Section -->
	<!--<section class="section-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
				</div>
				<div class="col-sm">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      
                      <div class="carousel-inner">
                        <div class="carousel-item text-center active">
                            <div class="img-box p-1 border rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="http://nicesnippets.com/demo/profile-1.jpg" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0">Paul Mitchel</h5>
                            <p class="m-0 pt-3">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet."</p>
                        </div>
                        <div class="carousel-item text-center">
                            <div class="img-box p-1 border rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="http://nicesnippets.com/demo/profile-3.jpg" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0">Paul Mitchel</h5>
                            <p class="m-0 pt-3">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet."</p>
                        </div>
                        <div class="carousel-item text-center">
                            <div class="img-box p-1 border rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="http://nicesnippets.com/demo/profile-7.jpg" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0">Paul Mitchel</h5>
                            <p class="m-0 pt-3">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet."</p>
                        </div>
                      </div>
                     
                    </div>
                </div>  
                <div class="col-sm-2">
				</div>

			</div>
		</div>
	</section>-->
	<!-- End Of Testimonials Section -->



	<!--Start of Our Networks Section-->
	<section class="networks-section">
			<div class="overlay-bg">
				<div class="container clearfix">
					<div class="row">
						<div class="col-sm-2">
						</div>
						<div class="col-sm">
							<h2 class="text-white text-center">Our Networks</h2>
							<p class="text-white text-center">Upesi Money Transfer is strategically positioned in Africa to capture the inflows from International Money Transfer companies into leading remittance receiving countries in Africa.</p>
							<div class="text-center">
							<a href="networks" class="btn_1 rounded">See All Countries</a>
							</div>
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					
				</div>
		</div>
			
	</section>
		<!--End of Our Networks Section-->


		<!-- Start of Partner Logos Section -->
	<section class="features-section">
		<div class="container">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Our Partners</h2>
				
			</div>
			<div class="row">
				<div class="col-sm">
				<section class="customer-logos slider">
					@foreach($partners as $partner)
					<div class="slide"><a href="{{$partner->url}}" target="_blank"><img src="{{ asset('img/partners/'.$partner->img) }}"></a></div>
					@endforeach			      
			   </section>
			</div>
		</div>
	</section>
	<!-- End of Partner Logos Section -->

	<!--Start of Get Started Section-->
    @include('frontend.inc.get-started')
		<!--End of Get Started Section-->


	<!-- Start Of Download App Section -->

	<!-- Start Of End App Section -->




	</main>
	<!-- /main -->
	
	<!-- Start Of Footer Section -->
    @include('frontend.inc.footer')
@endsection