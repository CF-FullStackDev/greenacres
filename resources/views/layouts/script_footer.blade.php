<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script src="owl-carousel/owl.carousel.js"></script>

@if(Request::segment(1) == 'service')
	<script src="{{ asset('js/lethargy.min.js') }}"></script>
    <script src="{{ asset('js/smartscroll.min.js') }}"></script>
    <script>
        var smartscroll = $.smartscroll({
            sectionWrapperSelector: ".section-wrapper",
            sectionClass: "section",
            autoHash: false
        });
    </script>
@endif
