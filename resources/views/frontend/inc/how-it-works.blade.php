<section class="works-section">
    <div class="overlay-bg">
        <div class="container clearfix">
            <div class="row">
                
                <div class="col-md-12">
                    <h2 class="text-white text-center">How It Works</h2>

                    <!-- Start of Row -->
                    <div class="row">
                        @foreach($howork as $how)
                        <div class="col-lg-6">
                            <div class="row padding-20">
                                <div class="col-lg-3">
                                    <img src="{{ asset('img/howork/'.$how->icon) }}" class="center-image features-icon">
                                </div>
                                <div class="col-lg-9 mobile-text-align">
                                    <h5 class="text-white">{{$how->number}}. {{$how->title}}</h5>
                                <p class="text-white">{{$how->info}}</p>
                                </div>
                            </div>
                        </div><!-- End of col-->
                        @endforeach
                    </div><!-- End of Row -->

                    <div class="text-center">
                    <!--<a href="#0" class="btn_1 rounded">Read more</a>-->
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    
</section>