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

@include('layouts.header')
<div id="start"></div>!
<div class="container-fluid video-header">
    <video autoplay loop preload playsinline muted poster="{{asset('assets/video/sample-video.jpg')}}">
        <source src="{{asset('assets/video/get-qoute2.mp4')}}" type="video/mp4">
    </video>
    <div class="row">
        <div class="col-md-12 yt">
            <div class="carousel fade-carousel slide" data-ride="carousel" id="bs-carousel">
                <div class="overlay"></div>
                <div class="carousel-inner">
                    <div class="item slides active">
                        <div class="slide-1"></div>
                        <div class="hero">
                            <div data-sr='wait 1s, then enter bottom and hustle 100px over 2s'>
                                <h1>GREEN ACRES</h1>
                                <h3>INNOVATIVE RECLAMATION SOLUTIONS</h3>
                            </div>
                        </div>
                    </div>
                    <div class="item slides">
                        <div class="slide-2"></div>
                        <div class="hero">
                            <div>
                                <h1>GREEN ACRES</h1>
                                <h3>SOIL STABLIZATION & VEGETATION ESTABLISHMENT PRODUCTS</h3>
                            </div>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#bs-carousel" role="button" data-slide="prev" data-sr='wait 2s, then enter left and hustle 50px over 1.5s'>
                        <div class="glyphicon-control lnr lnr-chevron-left-circle"></div>
                    </a>
                    <a class="right carousel-control" href="#bs-carousel" role="button" data-slide="next" data-sr='wait 2s, then enter right and hustle 50px over 1.5s'>
                        <div class="glyphicon-control lnr lnr-chevron-right-circle"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-mouse" data-sr='wait 0.2s, then enter bottom and hustle 125px over 1.5s'>
        <span class="scroll-btn">
            <a class="page-scroll" href="#about">
                <span class="mouse"><span>
                </span></span>
            </a>
        </span>
    </div>
</div>

<!--[About Us]-->
<div class="container">
    <section id="about">
        <div class="row About-Us">
            <div class="col-md-12 about-text">
                <div data-sr='wait 0.1s, then enter bottom and hustle 125px over 1.5s'>
                    <h2>
                        <span class="color2 span-700">Who we are</span>
                    </h2>
                    <div class="row about-oontent">
                        <div class="col-md-5">
                            <div class="about-icons-content" data-sr='wait 0.1s, then enter bottom and hustle 125px over 1.5s'>
                                <p class="about-icon-text">Who we Are <span class="color2"></span></p>
                            </div>
                            <p class="text-aboutus" >Green Acres was established in 2017 with one goal in mind, to find a cost-effective and self-sustaining solution, to fulfill the regulatory needs of the Filipino mining community.  To do so we have partnered up with HydroStraw and Summit Seed bringing you the latest in U.S. reclamation technology, while also bringing your costs down.
                            </p>
                        </div>
                        <div class="col-md-2">
                            <div class="about-icons-content">
                                <div class="icons">
                                    <img class="center-block" src="{{asset('assets/images/service/hydroseeding-black.png')}}" alt="hydroseeding" data-anijs="if:mouseover, do: rubberBand animated"/>
                                </div>
                                <div class="icons">
                                    <img class="center-block" src="{{asset('assets/images/service/seed-black.png')}}" alt="hydroseeding" data-anijs="if:mouseover, do: rubberBand animated"/>
                                </div>
                                <div class="icons">
                                    <img class="center-block" src="{{asset('assets/images/service/equipment-black.png')}}" alt="hydroseeding" data-anijs="if:mouseover, do: rubberBand animated"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="about-icons-content" data-sr='wait 0.1s, then enter bottom and hustle 125px over 1.5s'>
                                <p class="about-icon-text">We Are  <span class="color2">Acres</span></p>
                            </div>
                            <p class="text-aboutus" >Green Acres Hydroseeding Inc. is an accredited and exclusive importer and distributor of HydroStraws and Summit Seeds high quality range of products. With these cutting edge hydroseeding and erosion control technologies, partnered with technical knowledge and high quality application, we provide market leading results throughout Asia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--[About Us end]-->

<!--[testimonial]-->
<div class="container-fluid">
    <div class="row testimonial">
        <div class="col-md-12 about-text" data-wow-delay="0.5s">
            <div data-sr='wait 0.1s, then enter bottom and hustle 125px over 1.5s'>
                <h2>
                    <span class="color2 span-700">WHAT IS HYDROSEEDING</span>
                </h2>
            </div>
            <div class="container download text-squeeze">
                <div class="col-md-12" data-sr='wait 0.1s, then enter bottom and hustle 125px over 1.5s'>
                    <p>
                        Hydroseeding is an alternative seeding method, which involves combining a variation of fertilizer, lime, bio stimulants, moisture retention polymers, Tackifiers, and other additives with water and a hydroseeding mulch.
                        <br><br>
                        Mixed at the correct ratios using a form of agitation process, (commonly jet or mechanical agitation).  The combined elements agitated properly, then form a homogenous slurry.  The slurry is sprayed onto the ground to establish vegetation and control erosion.
                        <br><br>
                        This seeding method comes with instant erosion control benefits, but also the application can be tailored to any site to provide site specific solutions, often possible where conventional seeding is not a viable option at all.
                        <br><br>
                        When using Hydroseeding as an erosion control technique, particularly in difficult areas saves time and money.  This technique often allows you to cut out the expense of the costly and labor intensive erosion control blankets, and the need to bring in and spread top soil over them.
                        <br><br>
                        Hydroseeding also provides a ideal conditions for germination, dramatically speeding up the process.  Depending on conditions, visible results can be seen within 10 – 15 days.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--[testimonial-end]-->

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

<!--[Gallery]-->
<div class="container-fluid gallery-box">
    <section id="works">
        <div id="gallery">

            <div class="col-md-4 col-xs-12" data-sr='wait 0.1s, then enter top and hustle 20px over 1s'>
                <a href="#" data-toggle="modal" data-target="#openModal" class="modal-target" data-id="hydroseeding">
                    <figure class="images-gallery">
                        <img src="assets/images/works/hydroseeding.jpg" alt="hydroseeding">
                        <figcaption>
                            <h1>Hydroseeding</h1>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-md-4 col-xs-12" data-sr='wait 0.1s, then enter bottom and hustle 20px over 1s'>
                <a href="#" data-toggle="modal" data-target="#openModal" class="modal-target" data-id="erosion">
                    <figure class="images-gallery">
                        <img class="img gallery" src="assets/images/works/erosion.jpg" alt="erosion"/>
                        <figcaption>
                            <h1>Erosion</h1>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-md-4 col-xs-12" data-sr='wait 0.1s, then enter top and hustle 20px over 1s'>
                <a href="#" data-toggle="modal" data-target="#openModal" class="modal-target" data-id="equipment">
                    <figure class="images-gallery">
                        <img class="img gallery" src="assets/images/works/equipment.jpg" alt="equipment"/>
                        <figcaption>
                            <h1>Equipment</h1>
                        </figcaption>
                    </figure>
                </a>
            </div>

        </div>

        <div id="openModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-content">
                    <div class="modal-body">
                        <img class="img-responsive center-block" src="" alt="" id="modal-target-img"/>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<!--[Gallery-end]-->

<!--[qoute]-->
<section id="home" data-speed="4" data-type="background" class="download-container">
    <video autoplay loop preload playsinline muted poster="{{asset('assets/images/partners-bg.jpg')}}">
        <source src="{{asset('assets/video/sample-video.mp4')}}" type="video/mp4">
    </video>
    <div class="container container-padding">
        <div class="row download">
            <div class="col-md-12" data-sr='wait 0.1s, then enter bottom and hustle 20px over 1s'>
                <h2>What ever you need</h2>
                <div class="testimonial-border"></div>
                <p class="text-squeeze">
                    We offer a range of products and services, whether you are looking for something specific, a complete solution or simply want some advice, our team will be able to point you in the right direction.
                </p>
                <a class="btn buy-qoute page-scroll" href="#contact" role="button" data-anijs="if: mouseover, do: pulse animated">Get a qoute</a>
            </div>
        </div>
    </div>
</section>
<!--[qoute-end]-->

<!--[contact]-->
<div class="container-fluid contact-background">
    <div id="contact">
        <div class="col-md-12 contact-us" data-sr='wait 0.1s, then enter top and hustle 20px over 1s'>
            <h2>How to Reach Us</h2>
        </div>
    </div>
    <div class="row contact">
        <div class="col-md-6 col-md-offset-3 " data-sr='wait 0.2s, then ease in out and hustle 20px over 1s'>
            <div class="address-subpage">
                <div class="col-md-3 contact-address-subpage">
                    <div class="lnr lnr-map-marker contact-icon"></div>
                    <p>SMB Prestige Bldg, 40 San Buenaventura St, Bagong Ilog</p>
                </div>
                <div class="col-md-3 contact-address-subpage">
                    <div class="lnr lnr-smartphone contact-icon"></div>
                    <p>+632 465-9040</p>
                </div>
                <div class="col-md-3 contact-address-subpage">
                    <div class="lnr lnr-printer contact-icon"></div>
                    <p>Fax: +632 671 7214</p>
                </div>
                <div class="col-md-3 contact-address-subpage">
                    <div class="lnr lnr-envelope contact-icon"></div>
                    <p>solutions@greenacres.com.ph</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3" data-sr='wait 0.2s, then enter left and hustle 50px over 1s'>
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
<!--[contact-end]-->

@include('layouts.footer')

@include('layouts.script_footer')

</body>
</html>
