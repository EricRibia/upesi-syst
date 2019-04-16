@extends('frontend.master')
@section('content')

<main>
    <section class="country-specific" style="background:url('images/img/upesi/terms-services.jpg');">
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
                                <h2>Terms of use</h2>
                                            
                        </div>
                        {!! nl2br(e($terms[0])) !!}
                        {{-- <p>You must follow any policies made available to you with the use of our Services.
                        </p>
                        <p>We do not allow misuse, unauthorized resell or abuse of our Services. By accepting use of our Services, you agree to not interfere with our Service stipulations, access our Service using a method other than what is included in your contract with us and outlined in the instructions agreed upon. You may use our Services only as permitted by law, including applicable export and re-export control laws and regulations. We may suspend, revoke or terminate our Services to you if you do not comply with our terms or policies or if we are investigating suspected misconduct or fraudulent activity.
                        </p>
                        <p>Using our Service does not give ownership of intellectual property rights to any of our content that you have contracted with us to access. You may not use content from our Services unless written permissions are obtained from their rightful owners or are otherwise permitted by law. These terms do not grant the right to use any branding or logos associated with our Services without written expressed permission. You agree not to remove, obscure, or alter any legal notices displayed in or along with our Services, failure to comply will result in the revocation, suspension or termination of use of our Services and/or legal recourse.
                        </p>
                        <p>Our Services many times display proprietary content. In regards to this content: the content is the sole responsibility of the entity that makes it available, however, by using our Service, you agree to allow Upesi, if deemed necessary, the right to review this content to determine whether it is illegal or violates our policies, and that we may remove or refuse to display content that we reasonably believe violates our policies or the law.</p>
                        <p>In connection with your use of our Services, you agree that we may send you Service notifications, announcements, administrative messages, and other information pertaining to the use of our Services. After acceptance of these agreements, you may opt-out of some of these communications.</p>
                        <p>By using our Services on mobile devices, you agree to not use our Services that are in a manner to distract, detour or increase risk during operation of a moving vehicle or when obeying traffic and safety laws. By using our Services, you agree to hold Upesi harmless for any activity that causes injury, damages property or violates laws in accordance with these terms.</p>
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