<!DOCTYPE html>
<html>

@include('layouts.script_head')

<body data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Alert -->
<div class="alert-top">
    <div class="alert alert-success" role="alert">
        <h4><i class="lnr lnr-checkmark-circle"></i> Success!</h4>
        <p>Your message has been successfully sent.</p>
    </div>
</div>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- Preloader-end -->

@include('layouts.header')

<!--[jumotron]-->
<section id="start">
    <div class="jumbotron-sub jumbo img-responsive contact">
        <div class="container-fluid">
            <h2>Contact us</h2>
        </div>
    </div>
    <div class="opac"></div>
</section>
<!--[jumotron end]-->

<div id="map"></div>

<div class="container">
    <div class="col-md-12 " data-sr='wait 0.2s, then ease in out and hustle 20px over 1s'>
        <div class="col-md-12 contact-us contact-us-subpage" data-sr='wait 0.1s, then enter top and hustle 20px over 1s'>
            <h2>Stay in touch with Green Acres</h2>
            <div class="address-subpage">
                <div class="col-md-3 contact-address-subpage">
                    <div class="lnr lnr-map-marker contact-icon-black"></div>
                    <span>40 M.San Buenaventura, Pasig, Metro Manila</span>
                </div>
                <div class="col-md-3 contact-address-subpage">
                    <div class="lnr lnr-smartphone contact-icon-black"></div>
                    <span>Phone: +632 671 7444</span>
                </div>
                <div class="col-md-3 contact-address-subpage">
                    <div class="lnr lnr-printer contact-icon-black"></div>
                    <span>Fax: +632 671 7214</span>
                </div>
                <div class="col-md-3 contact-address-subpage">
                    <div class="lnr lnr-envelope contact-icon-black"></div>
                    <span>solutions@greenacres.com.ph</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!--[contact]-->
<div class="container-fluid contact-background">
    <div class="col-md-6 col-md-offset-3">
        <div class="col-md-12  contact-us" data-sr='wait 0.1s, then enter top and hustle 20px over 1s'>
            <h2>We are waiting for your message</h2>
            <div class="testimonial-border-white"></div>
        </div>
        <div class="row contact contact-subpage">
            <div class="col-md-10 col-md-offset-1" data-sr='wait 0.2s, then enter left and hustle 50px over 1s'>
                <form action="inquiry" method="post" id="store-inquiry">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Name" required>
                            <span class="input-group-addon"><i></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder="Email" required  >
                            <span class="input-group-addon"><i></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" name="InputAddress" placeholder="Address" required>
                            <span class="input-group-addon"><i></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" name="InputPhone" placeholder="Phone" required>
                            <span class="input-group-addon"><i></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="opt-group">
                            <select class="form-control" name="InputInterests" required>
                                <option value="" selected disabled>What interests you?</option>
                                <option value="Hydroseeding">Hydroseeding</option>
                                <option value="Erosion">Erosion Control</option>
                                <option value="Equipment">Equipment</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <textarea name="InputMessage" id="InputMessage" class="form-control" rows="10" placeholder="What would you like to know?" required></textarea>
                            <span class="input-group-addon"><i></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                    </div>
                    <button type="submit" name="submit" id="buttonContact" class="btn contact-btn pull-right" data-anijs="if: mouseover, do: pulse animated">Send</button>
                </form>
            </div>
            <hr class="featurette-divider hidden-lg">

        </div>
    </div>
</div>
<!--[contact-end]-->

@include('layouts.footer')

@include('layouts.script_footer')

<!--</maps>-->
<script type="text/javascript">
    function initMap() {
        var mapOptions = {
            zoom: 11,
            scrollwheel: false,
            center: new google.maps.LatLng(14.567786, 121.071877),
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]} ;
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var image = 'assets/images/flag.png';
        var myLatLng = new google.maps.LatLng(14.567786, 121.071877);
        var beachMarker = new google.maps.Marker({
            position: myLatLng,
            animation: google.maps.Animation.DROP,
            map: map,
            icon: image
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANzUGxKyO5lkbCambyimkk-763Ts5SEJk&callback=initMap" type="text/javascript"></script>

</body>
</html>
