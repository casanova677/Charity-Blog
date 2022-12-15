@extends('layouts.home')

@section('content')
    <!-- .tp-breadcumb-area start -->
    <div class="tp-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcumb-wrap">
                        <br><br><br>
                        <h2>Event</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>Event</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .tp-breadcumb-area end -->
    <!-- tp-event-details-area start -->




    <section class="event-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span>Our Events</span>
                <h2>Upcoming Events</h2>
            </div>
            @foreach ($events as $event)
                <div class="row">
                    <div class="col col-md-12">
                        <div class="tp-case-details-wrap">
                            <div class="tp-case-details-text">
                                <div id="Description">

                                    <div class="tp-case-details-img">
                                        <div class="img-holder">
                                            <img src="{{ asset('public/image/' . $event->image) }}" class="mx-auto"
                                                alt>
                                        </div>
                                    </div>
                                    <div class="tp-case-content">
                                        <div class="details">
                                            <ul class="entry-meta">
                                                <li><a href="#"><i class="ti-calendar"></i> {{ $event->created_at }}</a>
                                                </li>
                                                <li><a href="#"><i class="ti-folder"></i> {{ $event->category }}</a>
                                                </li>
                                            </ul>
                                            <h3><a href="#">{{ $event->title }}</a></h3>
                                            <p>{{ $event->body }}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <!-- end container -->
    </section>


    <div class="tp-case-details-area section-padding">
        <div class="container">
            <div class="row">
                <div class="co-md-6 col-lg-6">
                    <div class="thumb-text ">
                        <h2>Ukraine and impacted countries crisis</h2>
                    </div>
                    <p> Due to the conflict escalation in Ukraine, millions of people have left their homes and crossed into
                        neighbouring countries. The Ukrainian Red Cross is helping people affected by the conflict as the
                        security situation allows. National Societies in surrounding countries, with support from IFRC, are
                        assisting people leaving Ukraine with shelter, basic aid items and medical supplies. People from
                        Ukraine will need long-term, ongoing support. Our priority is addressing the humanitarian needs of
                        all people affected by the conflict, inside and outside Ukraine.</p>
                </div>
                <div class="col-md-6 col-lg-6  offset-md-4">
                    <img src="assets/images/event.jpg" alt="event image">
                </div>
            </div>
        </div>
    </div>
    <!-- tp-event-details-area end -->
@endsection
