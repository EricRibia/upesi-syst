@extends('frontend.master')
@section('content')

<main>
    <section class="country-specific" style="background:url('images/img/upesi/privacy-policy.jpg');">
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
                                <h2>Privacy Policy</h2>
                                            
                        </div>
                        {!! nl2br(e($privacy_policy[0])) !!}
                        {{-- <p>Our privacy policy explains how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that Upesi can use such data in accordance with our privacy policies.
                        </p>
                        <p>We respond to notices of alleged copyright infringement and terminate accounts of repeat violators of copyright infringement according to the process defined in the Kenya Data Protection Bill 2013
                            <h5>We collect information in two ways:</h5>
                            <h5>Information you give us.</h5>
                        </p>
                        <p>If our Services require you to sign up for a Upesi account, and or if, you do, you may have to provide personal information. We will not in any way use any financial information you submit in conjunction of creating an account, unless allowed by law. We do often encourage ways to take full advantage of the sharing features we offer. This may include using personal information to create publically visible profiles that may or may not include names, photos and other personal information. You can request in writing to not have your information displayed publically in any manner, in conjunction with signing up for a Upesi account as part of a Service requirement.
                        </p>
                        <h5>Information we get from your use of our Services.</h5>
                        <p>We may collect information about the additional services that you use and how you use them, as it applies to advertising and content specific promotions. </p>
                        <h5>Warranties and Disclaimers</h5>
                        <p>We provide our Services using a commercially reasonable level of skill and care and operate within all national laws. However, Upesi does not make specific promises about the use of our Services or the success of using our Services. The following statements apply:</p>
                        <p>OTHER THAN AS EXPRESSLY SET OUT IN THESE TERMS OR ADDITIONAL TERMS, NEITHER UPESI NOR ITS SUPPLIERS OR DISTRIBUTORS MAKE ANY SPECIFIC PROMISES ABOUT THE SERVICES. WE DO NOT MAKE ANY COMMITMENTS ABOUT THE CONTENT WITHIN THE SERVICES, THE SPECIFIC FUNCTIONS OF THE SERVICES, OR THEIR RELIABILITY, AVAILABILITY, OR ABILITY TO MEET YOUR NEEDS. WE PROVIDE OUR SERVICES “AS IS”.</p>
                        <p>SOME JURISDICTIONS PROVIDE FOR CERTAIN WARRANTIES, LIKE THE IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. TO THE EXTENT PERMITTED BY LAW, WE EXCLUDE ALL WARRANTIES.</p>
                        <h5>About these Terms</h5>
                        <p>We may modify these terms or any additional terms that apply to a Service to reflect changes to the law or changes to our Services. Upesi will post notice of modifications to these terms on this page. We will post notice of modified additional terms in the applicable Service. Changes will not apply retroactively and will become effective no sooner than fourteen days after they are posted. However, changes addressing new functions for a Service or changes made for legal reasons will be effective immediately. If you do not agree to the modified terms for a Service, you should discontinue your use of that Service.</p>
                        <p>If there is a conflict between these terms and the additional terms, the additional terms will control for that conflict.</p>
                        <p>These terms control the relationship between Upesi and you. They do not create any third party beneficiary rights.</p>
                        <p>If you do not comply with these terms, and we do not take action right away, this does not mean we are forfeiting any rights that we may have (such as taking action in the future).</p>
                        <p>If you have any questions or concerns about our Services or these Terms, you may contact us.</p>
                         --}}

                        
                        

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