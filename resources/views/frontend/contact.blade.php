@extends('frontend.master')
@section('content')
<main>

    <section class="country-specific" style="background:url('images/img/upesi/contact-bg.jpg');">
        <div class="wrapper">
            
                
        </div>
    </section>
    

    <div class="contact_info">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <i class="pe-7s-map-marker"></i>
                    <h4>Physical Location</h4>
                    <span>Ground Floor, Morningside Office Park,<br>Ngong Road, Nairobi Kenya.</span>
                </li>
                <li>
                    <i class="pe-7s-mail-open-file"></i>
                    <h4>Email address</h4>
                    <span>customerservice@upesi.co.ke</span>

                </li>
                <li>
                    <i class="pe-7s-phone"></i>
                    <h4>Contacts info</h4>
                    <span>+254 726 500 404, <br>+254 726 499 656</span>
                </li>
            </ul>
        </div>
    </div>
    <!--/contact_info-->

    <div class="bg_color_1">
        <div class="container padding-40">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d15955.166578782206!2d36.77703754775883!3d-1.299831369662308!3m2!1i1024!2i768!4f13.1!2m1!1smorningside+office+park+ngong+road!5e0!3m2!1sen!2ske!4v1534937976176" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <!-- /map -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                    <h4>Send a message</h4>
                    
                    <div id="message_suc" class="alert alert-success text-center" style="max-width:50%;margin: 0 auto;padding:5px;">
                        {{-- Message sent successfully --}}
                     </div>
 
                    <form id="form_contact">
                    <input type="hidden" value="{{csrf_token()}}" id="token"/>
                    <input type="hidden" value="contact" id="identifier"/>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="input">
                                    <input class="input_field" type="text" id="fname" name="fname" required="">
                                    <label class="input_label">
                                        <span class="input__label-content">First Name*</span>
                                    </label>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <span class="input">
                                    <input class="input_field" type="text" id="lname" name="lname" required="">
                                    <label class="input_label">
                                        <span class="input__label-content">Last name*</span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-md-6">
                                <span class="input">
                                    <input class="input_field" type="email" id="c_email" name="email" required="">
                                    <label class="input_label">
                                        <span class="input__label-content">Email Address*</span>
                                    </label>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <span class="input">
                                    <input class="input_field" type="number" id="c_phone" name="phone" min="1">
                                    <label class="input_label">
                                        <span class="input__label-content">Phone Number</span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <!-- /row -->
                        <span class="input">
                                <textarea class="input_field" id="c_message" name="message" style="height:150px;"></textarea>
                                <label class="input_label">
                                    <span class="input__label-content">Your message</span>
                                </label>
                        </span>

                        {{-- <span class="input">
                            <div class="g-recaptcha" data-sitekey="6Le9BXcUAAAAAPxGlMlQdsp6NSLUgqJ-Z9dsU50m"></div>
                        </span> --}}
                    



                        <p class="add_top_30">
                        <input id="contact_form" type="submit" value="submit" class="btn_1 contact_fm rounded"></p>

                        
                        </form>
                    <div id="contact-messages"></div>
                </div>
            </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->

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
