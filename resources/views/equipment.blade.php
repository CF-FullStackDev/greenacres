<!DOCTYPE html>
<html>

@include('layouts.script_head')

<body data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- Preloader-end -->

@include('layouts.header')

<!--[jumotron]-->
<section id="start">
    <div class="jumbotron-sub jumbo img-responsive equipment">
        <div class="container-fluid">
            <h2>Equipment</h2>
        </div>
    </div>
    <div class="opac"></div>
</section>
<!--[jumotron end]-->

<!--[Equipment]-->
<div class="container">
    <section>
        <div class="row Equipment">
            <div class="col-md-12 equipment-text">
                <h2 data-sr='wait 0.1s, then enter top and hustle 100px over 1s'>
                    <span class="color2 span-700">Our Equipments</span>
                </h2>
            </div>

            <div class="col-md-12 equipment-text" style="padding-top:0;">
                <div>
                    <div class="row equipment-oontent">
                        <div class="col-md-4" data-sr='wait 0.1s, then enter bottom and hustle 125px over 1.5s'>
                            <img class="img-responsive center-block" src="{{asset('assets/images/equipments/track3.png')}}" alt=""/>
                        </div>
                        <div class="col-md-4" data-sr='wait 0.2s, then enter bottom and hustle 125px over 1.5s'>
                            <img class="img-responsive center-block" src="{{asset('assets/images/equipments/track1.png')}}" alt=""/>
                        </div>
                        <div class="col-md-4" data-sr='wait 0.3s, then enter bottom and hustle 125px over 1.5s'>
                            <img class="img-responsive center-block" src="{{asset('assets/images/equipments/track2.png')}}" alt=""/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 equipment-text" style="padding-top:0;">
                <div data-sr='wait 0.1s, then enter bottom and hustle 125px over 1.5s'>
                    <div class="row equipment-oontent">
                        <div class="col-md-4">
                            <div class="equipment-icons-content" data-sr='wait 0.1s, then enter bottom and hustle 125px over 1.5s'>
                                <p class="equipment-icon-text">Sales</p>
                            </div>
                            <p class="text-equipment" style="border-bottom:0;">
                                <span>&#8226; Hydroseeders</span>
                                - 2500 gallon (GA – 2500 series)<br>
                                - 900 gallon (GA – 900 series)<br>
                                - 600 gallon (GA – 600 series)<br>
                                - 400 gallon (GA – 400 series)<br>
                                - Truck / Trailer mounted
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="equipment-icons-content" data-sr='wait 0.1s, then enter bottom and hustle 125px over 1.5s'>
                                <p class="equipment-icon-text">Servicing</p>
                            </div>
                            <p class="text-equipment" style="border-bottom:0;">
                                <span>&#8226; General Equipment Servicing</span>
                                <span>&#8226; Parts</span>
                                - pumps<br>
                                - motors<br>
                                - piping<br>
                                - hoses<br>
                                - nozels
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="equipment-icons-content" data-sr='wait 0.1s, then enter bottom and hustle 125px over 1.5s'>
                                <p class="equipment-icon-text">Training</p>
                            </div>
                            <p class="text-equipment" style="border-bottom:0;">
                                <span>&#8226; Use of Equipment</span>
                                <span>&#8226; Application of Product</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--[Equipment Us end]-->


@include('layouts.footer')

@include('layouts.script_footer')

</body>
</html>
