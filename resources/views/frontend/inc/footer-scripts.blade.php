<!-- Search Menu -->
<div class="search-overlay-menu">
    <span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
    <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Search..." />
        <button type="submit"><i class="icon_search"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

<!-- COMMON SCRIPTS -->
  <script type="text/javascript">

    $(function() {

      $('#world-map').JSMaps({
        map: 'world'
      });

    });
    
  </script>
 
<script type="text/javascript" src="{{asset('js/frontend/common_scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontend/main.js')}}"></script>

<!-- Ajax Form Scripts -->
<script type="text/javascript" src="{{asset('js/frontend/app.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontend/contact.js')}}"></script>
<!-- Ajax Form Scripts -->

<script type="text/javascript" src="{{asset('js/frontend/clients-carousel.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/validate.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script type="text/javascript" src="{{asset('css/layerslider/js/greensock.js')}}"></script>
<script type="text/javascript" src="{{asset('css/layerslider/js/layerslider.transitions.js')}}"></script>
<script type="text/javascript" src="{{asset('css/layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script type="text/javascript">
    'use strict';
    $('#layerslider').layerSlider({
        autoStart: true,
        navButtons: true,
        navStartStop: false,
        showCircleTimer: false,
        responsive: true,
        responsiveUnder: 1280,
        layersContainer: 1200,
        skinsPath: 'css/layerslider/skins/'
            // Please make sure that you didn't forget to add a comma to the line endings
            // except the last line!
    });
</script>

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="b4279ccf-0189-400a-8a79-2d611f5a6ed8";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>


