@extends('layouts.home')

@section('content')
    <!-- .tp-breadcumb-area start -->
    <div class="tp-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcumb-wrap">
                        <h2>Our Causes</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>Causes</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .tp-breadcumb-area end -->
    <!-- case-area-start -->

    <div class="case-area section-padding">

        <div class="container mt-3 mb-3">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcumb-wrap">
                        <br>
                        <h2>Ukraine </h2>
                        <div class="thumb-text ">
                            <span>
                                <h3>How the Red Cross International Community is helping.</h3>
                            </span>
                        </div>

                        <ul>
                            <li><a href="#">Conflict in Eastern Europe continues to take a toll on the most vulnerable,
                                    particularly in Ukraine. As border tension and winter weather impact those in country,
                                    the Red Cross is responding to their needs in a variety of ways.

                                    "Along with the Ukrainian Red Cross Society and Red Cross Red Crescent Movement
                                    partners, we stand ready to step up our humanitarian response should the need arise,"
                                    said Florence Gillette, the International Committee of the Red Cross head of delegation
                                    in Ukraine.

                                    For its part, the RCICU is on the ground delivering urgent assistance — food, fuel for
                                    heating, medical supplies and support for housing — to those living close to the line of
                                    contact in eastern Ukraine. The combination of cold temperatures, COVID-19 and chronic
                                    uncertainty make basic needs a challenge.</a></li>
                        </ul><br>

                        <div class="thumb-text ">
                            <span>
                                <h3>Surrounding Areas</h3>
                            </span>
                        </div>

                        <ul>
                            <li><a href="#">Recently, U.S. troops deployed to neighboring countries. For those troops, the
                                    American Red Cross is sending specially-trained staff to support their emergency
                                    communication needs as part of the Red Cross Hero Care Network. This is a
                                    Congressionally-chartered program that connects service members and their families in
                                    times of need. Through this role, Red Crossers are on the ground to assist U.S. service
                                    members as the needs in Ukraine may evolve.</a></li>

                        </ul><br>

                        <div class="thumb-text ">
                            <span>
                                <h3>In Ukraine</h3>
                            </span>
                        </div>

                        <ul>
                            <li><a href="#">After eight years of conflict, the humanitarian needs remain large for hundreds
                                    of thousands of people living close to the line of contact in eastern Ukraine. Key needs
                                    are water, gas and electricity, as supplies are limited.

                                    "The situation in eastern Ukraine is desperately challenging for so many people and
                                    families. The International Committee of the Red Cross is committed to working alongside
                                    them and helping in every way we can," said Gillette.

                                    The current subzero temperatures are compounding the situation for many families.
                                    "People are telling us their priority is getting through the winter safe and warm.
                                    Winter is harsh here, especially for older people," said Daniel Bunnskog, RCICU’s deputy
                                    head of delegation.

                                    "To help those in need, we provide a range of support, from insulating people's houses
                                    to improving their energy efficiency to providing fuel or cash assistance to heat the
                                    homes of 35,000 people on either side of the contact line."</a></li>

                        </ul><br>

                        <div class="thumb-text ">
                            <span>
                                <h3>Heightened Uncertainty</h3>
                            </span>
                        </div>

                        <ul>
                            <li><a href="#">Sofia Reznik is an RCICU psychologist. Her concern is the mental toll on people
                                    living through a time of heightened uncertainty.

                                    "Considering the atmosphere of tension in and around Ukraine, many older residents have
                                    had memories of previous wars resurface. We're hearing a lot of people comparing the
                                    situations, with great sadness and a sense of hopelessness.

                                    "Now, as they approach the end of their lives, they are again witnessing an uncertain
                                    and unstable world. They live in constant fear for their lives due to the ongoing
                                    conflict, Reznik says.

                                    Throughout the conflict, the RCICU maintains dialogue with all sides to ensure that
                                    civilians and essential infrastructure are protected.

                                    "Our message to all sides is clear: civilians and infrastructure ensuring the delivery
                                    of essential services to them must be spared, families must be able to see and support
                                    each other, and detainees must be treated humanely, in line with what international
                                    humanitarian law demands in all armed conflict," Gillette said.</a></li>

                        </ul>
                    </div>


                </div>
            </div>
        </div><br>
        <div class="container ">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title text-center">
                    <div class="thumb-text ">
                        <span>CAUSES</span>
                    </div>
                    <h2>Assistance Provided</h2>

                </div>
            </div>
            <div class="col-md-12">
                <p>In the last 12 months, the RCICU supported communities on both sides of the line of contact:
                    Around 35,000 people received solid fuel or cash assistance to help heat their houses this winter.
                    Around 37,000 people along the line of contact were supported with food and hygiene items. Over 50
                    hospitals and 60 primary healthcare facilities on both sides of the line of contact received medical
                    equipment to cope with the COVID-19 pandemic and emergency preparedness. Water stations on either side
                    of the line have been repaired, providing water to around 872,000 people. Over 22,000 people increased
                    their knowledge of mine risks during educational sessions and thousands of mine warning signs were
                    donated to mark hazardous areas. Around 5,600 households received support to repair their damaged homes.
                </p>
            </div>
            <div class="row">
            @foreach ($causes as $cause)
                
         
                
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="cause-item">
                        <div class="cause-top">
                            <div class="cause-img">
                                <img src="../public/image/{{$cause->image}}" alt="">
                                <div class="case-btn">
                                    <a href="/donate" class="theme-btn">Donate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="cause-text">
                            <ul>
                                <li><a href="#">GOAL : ${{$cause->goal}}</a></li>
                                <li><a href="#">RISED : ${{$cause->raised}}</a></li>
                            </ul>
                            <h3><a href="#">{{$cause->title}}</a></h3>
                            <p>{{$cause->body}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- case-area-end -->
    <!-- .tp-counter-area start -->
    <div class="tp-counter-area v2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-counter-grids">
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="6200">00</span>+</h2>
                            </div>
                            <p>Donation</p>
                        </div>
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="80">00</span>+</h2>
                            </div>
                            <p>Fund Raised</p>
                        </div>
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="245">00</span>+</h2>
                            </div>
                            <p>Volunteers</p>
                        </div>
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="605">00</span>+</h2>
                            </div>
                            <p>Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .tp-counter-area end -->
@endsection
