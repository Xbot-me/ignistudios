<!-- //copyright -->
    <script src="{{ asset('js/jarallax.js') }}"></script>
    <script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- Tabs-JavaScript -->
    <script src="{{ asset('js/jquery.filterizr.js') }}"></script>
        <script src="{{ asset('js/controls.js') }}"></script>
        <script type="text/javascript">
            $(function() {
                $('.filtr-container').filterizr();
            });
        </script>
    <!-- //Tabs-JavaScript -->
    <!-- PopUp-Box-JavaScript -->
        <script src="{{ asset('js/jquery.chocolat.js') }}"></script>
        <script type="text/javascript">
            $(function() {
                $('.filtr-item a').Chocolat();
            });
        </script>
    <!-- //PopUp-Box-JavaScript -->