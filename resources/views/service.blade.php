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
    <div class="jumbotron-sub jumbo img-responsive service">
        <div class="container-fluid">
            <h2>What We Do</h2>
        </div>
    </div>
    <div class="opac"></div>
</section>
<!--[jumotron end]-->

<!--[What we do]-->
<div class="container-fluid what-we">
    <section id="what_we_do">
        <div class="row what_we_do">
            <div class="col-md-12" data-sr='wait 0.1s, then enter top and hustle 50px over 1s'>
                <h2>Services</h2>
                <div class="testimonial-border"></div>
            </div>
        </div>
        <div class="container">
            <div class="row what">
                <div class="col-md-4 col-sm-4 webdesign"  data-sr='wait 0.1s, then enter top and hustle 50px over 0.8s'>
                    <div class="icons">
                        <img class="center-block" src="{{asset('assets/images/service/hydroseeding.png')}}" alt="hydroseeding" data-anijs="if:mouseover, do: rubberBand animated"/>
                    </div>
                    <h2>HYDROSEEDING</h2>
                    <p style="">Providing you with cutting edge hydroseeding products and technologies, in a cost effective manner.</p>
                </div>
                <div class="col-md-4 col-sm-4 webdesign"  data-sr='wait 0.1s, then enter top and hustle 50px over 0.8s'>
                    <div class="icons">
                        <img class="center-block" src="{{asset('assets/images/service/erosion.png')}}" alt="erosion" data-anijs="if:mouseover, do: rubberBand animated"/>
                    </div>
                    <h2>EROSION CONTROL</h2>
                    <p>Solutions for your water erosion and surface runoff problems.  Helping you reduce your water poltuion and soil loss issues.</p>
                </div>
                <div class="col-md-4 col-sm-4 webdesign"  data-sr='wait 0.1s, then enter top and hustle 50px over 0.8s'>
                    <div class="icons">
                        <img class="center-block" src="{{asset('assets/images/service/seed.png')}}" alt="seed" data-anijs="if:mouseover, do: rubberBand animated"/>
                    </div>
                    <h2>SEED</h2>
                    <p>Licensed importers of certified U.S.A. seed with guaranteed quality assurance.  Formulated specifically to meet individual requirements.</p>
                </div>
                <div class="col-md-4 col-sm-4 webdesign-bottom"  data-sr='wait 0.1s, then enter bottom and hustle 50px over 0.8s'>
                    <div class="icons">
                        <img class="center-block" src="{{asset('assets/images/service/equipment.png')}}" alt="equipment" data-anijs="if:mouseover, do: rubberBand animated"/>
                    </div>
                    <h2>EQUIPMENT</h2>
                    <p>Designed and built by our highly skilled entineering team, using only the highest quality imported mechanical parts.</p>
                </div>
                <div class="col-md-4 col-sm-4 webdesign-bottom"  data-sr='wait 0.1s, then enter bottom and hustle 50px over 0.8s'>
                    <div class="icons">
                        <img class="center-block" src="{{asset('assets/images/service/consultation.png')}}" alt="consultation" data-anijs="if:mouseover, do: rubberBand animated"/>
                    </div>
                    <h2>CONSULTATION</h2>
                    <p>We work in partnership with you, to give you the best service, at the lowest possible cost. <br>&nbsp;</p>
                </div>
                <div class="col-md-4 col-sm-4 webdesign-bottom"  data-sr='wait 0.1s, then enter bottom and hustle 50px over 0.8s'>
                    <div class="icons">
                        <img class="center-block" src="{{asset('assets/images/service/solutions.png')}}" alt="solutions" data-anijs="if:mouseover, do: rubberBand animated"/>
                    </div>
                    <h2>COMPLETE SOLUTIONS</h2>
                    <p>We offer all of our services and products separately, however if it is a complete solution you are looking for we can do that too.</p>
                </div>
            </div>
        </div>
    </section>
</div>
<!--[What we do - end]-->

<!--[qoute]-->
<section id="home" data-speed="4" data-type="background" class="download-container">
    <video autoplay loop preload playsinline muted poster="{{asset('assets/images/partners-bg.jpg')}}">
        <source src="{{asset('assets/video/get-qoute2.mp4')}}" type="video/mp4">
    </video>
    <div class="container container-padding">
        <div class="row download">
            <div class="col-md-12" data-sr='wait 0.1s, then enter bottom and hustle 20px over 1s'>
                <h2>What ever you need</h2>
                <div class="testimonial-border"></div>
                <p class="text-squeeze">
                    We offer a range of products and services, whether you are looking for something specific, a complete solution or simply want some advice, our team will be able to point you in the right direction.
                </p>
                <a class="btn buy-qoute" href="{{ url('contact') }}" role="button" data-anijs="if: mouseover, do: pulse animated">Get a qoute</a>
            </div>
        </div>
    </div>
</section>
<!--[qoute-end]-->

<!--[About Us]-->
<!-- <div class="container">
    <section id="about">
        <div class="row About-Us">
            <div class="col-md-12 about-text">
                <div>
                    <h2 data-sr='wait 0.1s, then enter bottom and hustle 125px over 1.5s'>what we do </h2>
                    <div class="testimonial-border"></div>
                </div>
            </div>

        </div>
    </section>
</div> -->

<div class="container">
    <div class="col-md-12 " data-sr='wait 0.2s, then ease in out and hustle 20px over 1s'>
        <div class="col-md-12 contact-us contact-us-subpage" data-sr='wait 0.1s, then enter top and hustle 20px over 1s'>
            <h2>What we do</h2>
            <div class="address-subpage">
                <div class="col-md-3 contact-address-subpage">
                    <img class="center-block" src="{{asset('assets/images/service/team-black.png')}}" alt="solutions" data-anijs="if:mouseover, do: rubberBand animated" style="margin-bottom:7px;">
                    <span>The Team</span>
                </div>
                <div class="col-md-3 contact-address-subpage">
                    <img class="center-block" src="{{asset('assets/images/service/mulch-black.png')}}" alt="solutions" data-anijs="if:mouseover, do: rubberBand animated" style="margin-bottom:7px;">
                    <span>The Mulch</span>
                </div>
                <div class="col-md-3 contact-address-subpage">
                    <img class="center-block" src="{{asset('assets/images/service/seed-black.png')}}" alt="solutions" data-anijs="if:mouseover, do: rubberBand animated" style="margin-bottom:7px;">
                    <span>The Seed</span>
                </div>
                <div class="col-md-3 contact-address-subpage">
                    <img class="center-block" src="{{asset('assets/images/service/equipment-black.png')}}" alt="solutions" data-anijs="if:mouseover, do: rubberBand animated" style="margin-bottom:7px;">
                    <span>The Equipment</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--[About Us end]-->

<div class="container-fluid about">
    <div class="section-wrapper">

		<div class="section team" data-hash="team">
            <div class="section-overlay">
                <div class="col-md-12" data-sr='wait 0.1s, then enter bottom and hustle 50px over 0.8s'>
                    <div class="about-icons-content">
                        <div class="icons">
                            <img class="center-block" src="{{asset('assets/images/service/team.png')}}" alt="solutions" data-anijs="if:mouseover, do: rubberBand animated"/>
                        </div>
                        <p class="about-icon-text">The Team</p>
                    </div>
                    <div class="container">
                        <p class="text-squeeze">
                            Green Acres is made up of a variety of skilled individuals formulating a well rounded team.<br><br>
                            Our skill sets ranging from Ph.D’s in Plant Breeding and Genetics, to project management and logistics, all the way through to our highly trained on the ground technicians.<br><br>
                            In addition the highly experienced teams from both HydroStraw and Summit Seed also play a huge role in what we do here.  We are very pleased to say they are all very much key members of the Green Acres team.<br><br>
                            Being made up of all these factors, means no matter what your enquiry, we can help you find your solution.
                        </p>
                    </div>
                </div>
            </div>
		</div>

		<div class="section mulch" data-hash="mulch">
			<div class="section-overlay">
                <div class="col-md-12" data-sr='wait 0.1s, then enter bottom and hustle 50px over 0.8s'>
                    <div class="about-icons-content">
                        <div class="icons">
                            <img class="center-block" src="{{asset('assets/images/service/mulch.png')}}" alt="solutions" data-anijs="if:mouseover, do: rubberBand animated"/>
                        </div>
                        <p class="about-icon-text">The Mulch</p>
                    </div>
                    <div class="container">
                        <p class="text-squeeze">
                            The products we offer our customers have been finely tuned over 20 + years of research and development.<br><br>
                            HydroStraw products rivals the current market leading products in more way than one.<br><br>
                            The HydroStraw products have tackled a key problem within conventional hydroseeding practices - water usage.  HydroStraw All In 1 can be mixed at 100 LBS / 100 Gallons of water appose to standard competitor products at 75 LBS / 100 Gallons, SAVING both time and money.<br><br>
                            Also these Products are a one step process, unlike other hydroseeding mulches, which require a two step process using two different products.  By cutting the process to one step you not only SAVE time you also SAVE money.<br><br>
                            With HydroStraw you also use dramatically less product over all.  Saving you even more money.
                        </p>
                    </div>
                </div>
			</div>
		</div>

		<div class="section seed" data-hash="seed">
			<div class="section-overlay">
                <div class="col-md-12" data-sr='wait 0.1s, then enter bottom and hustle 50px over 0.8s'>
                    <div class="about-icons-content">
                        <div class="icons">
                            <img class="center-block" src="{{asset('assets/images/service/seed.png')}}" alt="solutions" data-anijs="if:mouseover, do: rubberBand animated"/>
                        </div>
                        <p class="about-icon-text">The Seed</p>
                    </div>
                    <div class="container">
                        <p class="text-squeeze">
                            We are licensed to import quality assured seed from U.S.A.  Summit Seed who supply us have had success with their products around the globe.<br><br>
                            They have also worked very closely with mines around the world, developing  a range of products with the mining community in mind.<br><br>
                            One of the key factors to the international success of Summit Seed products is the flexibility they offer.<br><br>
                            We work closely with their team, discussing soil test data and using this to formulate a blend of seed to suit individual site needs.<br><br>
                            Additionally, our strong ties with Summit Seed has given us unparalleled access to species of seed that are in very short supply.  This allows us to offer you blends of quality seed that no one else can offer.
                        </p>
                    </div>
                </div>
			</div>
		</div>


		<div class="section equipment" data-hash="equipment">
            <div class="section-overlay">
                <div class="col-md-12" data-sr='wait 0.1s, then enter bottom and hustle 50px over 0.8s'>
                    <div class="about-icons-content">
                        <div class="icons">
                            <img class="center-block" src="{{asset('assets/images/service/equipment.png')}}" alt="solutions" data-anijs="if:mouseover, do: rubberBand animated"/>
                        </div>
                        <p class="about-icon-text">The Equipment</p>
                    </div>
                    <div class="container">
                        <p class="text-squeeze">
                            We can provide you with a range of equipment to fit your hydroseeding and erosion control needs.<br><br>
                            Our highly skilled team of engineers actually design and build our own range of hydroseeding equipment.<br><br>
                            Alternatively if you are looking for something specific, we can source other brands of equipment on your behalf.<br><br>
                            With our ties to U.S.A and Chinese manufacturers, we can help get you what you want and what you need.
                        </p>
                    </div>
                </div>
			</div>
		</div>

	</div>
</div>

@include('layouts.footer')

@include('layouts.script_footer')

</body>
</html>
