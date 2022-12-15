@extends('layouts.home')

@section('content')
    <!-- .tp-breadcumb-area start -->
    <div class="tp-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcumb-wrap">
                        <h2>Become a Volunteer</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>Volunteer</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .tp-breadcumb-area end -->
    <!-- volunteer-area-start -->
    <div class="volunteer-area ">
        <div class="volunteer-wrap section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title section-title2 text-center">
                           
                            <h2>Become a Volunteer</h2>

                            <div class="thumb-text">
                                <span>Volunteering has been a part of our network since we were founded over 150 years ago. To this day, voluntary service—helping others without desire for personal gain—remains one of our Fundamental Principles guiding everything we do.</span>
                            </div>
                        </div>
                    </div>
                    <img src="assets/images/happy.jpg" alt="">
                    <div class="col-md-12">
                        
                        <br><p>When you hear ‘Red Cross’ or ‘Red Crescent’, you might picture people running with stretchers or handing out food. But this only scratches the surface of what our incredible volunteers do. Our volunteers are also involved in activities such as:</p>
                        <li>Running telephone hotlines to support isolated communities</li>
                        <li>Providing comfort and care to people on the move</li>
                        <li>Leading community health campaigns so people know how to live long and healthy lives</li>
                        <li>Search and rescue efforts and reuniting families in the wake of a disaster</li>
                        <li>Running youth programmes</li>
                        <p>And much, much more.</p>
                        <p>Beyond delivering services, our volunteers play a vital role improving community resilience and unity. They also advocate fiercely on behalf of vulnerable people. The scale and scope of what they undertake and achieve every day across the world is astonishing.</p> <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="volunteer-item">
                            <div class="volunteer-img-wrap">
                                <div class="volunter-img">
                                    <img src="assets/images/vol.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="volunteer-contact">
                            <div class="volunteer-contact-form">
                                <form method="post" action="/volut_new" enctype="multipart/form-data">
                                    @csrf
                                    @if (session('done'))
                                        <div class="alert alert-success">
                                            {{ session('done') }}
                                        </div>
                                     @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="First Name">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Email">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                placeholder="Subject">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in">
                                            <label for="file">Upload Your CV</label>
                                            <input id="file" type="file" class="form-control" name="file">
                                            <i class="ti-cloud-up"></i>
                                        </div>
                                        <div class="col-lg-12 col-12 form-group">
                                            <textarea class="form-control" name="note" id="note"
                                                placeholder="Case Description..."></textarea>
                                        </div>
                                        <div class="submit-area col-lg-12 col-12">
                                            <button type="submit" class="theme-btn submit-btn">Send Message</button>
                                          
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- volunteer-area-end -->
    <!-- start team-section -->
    <section class="team-section v2 section-padding ">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-lg-offset-3">
                    <div class="section-title text-center">
                        <span>Meet Our Team</span>
                        <h2>Our Expert Volunteer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="team-grids clearfix">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/team/team-1.jpg" alt>
                            </div>
                            <div class="details">
                                <h3><a href="#">Devin Robertson</a></h3>
                                <p>CEO & Founder</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/team/team-2.jpg" alt>
                            </div>
                            <div class="details">
                                <h3><a href="#">Rickey Goodman</a></h3>
                                <p>Volunteer</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/team/team-3.jpg" alt>
                            </div>
                            <div class="details">
                                <h3><a href="#">Jean Washington</a></h3>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>

            <div class="row">

                <div class="section-title text-center">
                    <div class="thumb-text ">
                        <br><span>What do our volunteers have in common?
                        </span><br><br>
                    </div>
                    

                </div>
                <div class="col col-xs-12">
                    <div class="team-grids clearfix">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/volu1.jpg" alt>
                            </div>
                            <div class="details">
                                <h3><a href="#">They volunteer part-time</a></h3>
                                <p>Our volunteers are teachers, parents, students, nurses, bankers, construction workers, artists—you name it! They each find time in their personal lives to commit to volunteering, with National Societies offering a variety of roles to suit all skills and schedules.</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/volu2.jpg" alt>
                            </div>
                            <div class="details">
                                <h3><a href="#">They receive training and support</a></h3>
                                <p>All our volunteers receive introductory training to help them understand our network and their specific roles. Throughout their membership they also have access to lots of additional training resources and support from peers, National Society staff and the RCICU.</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="assets/images/volu3.jpg" alt>
                            </div>
                            <div class="details">
                                <h3><a href="#">They are motivated by helping others</a></h3>
                                <p>Our volunteers do lots of different activities but are united by the same goal: to serve humanity. Often people join their local Red Cross or Red Crescent society as a temporary volunteer in the wake of a disaster. Many enjoy volunteering so much they stay on—sometimes for many decades.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end team-section -->
@endsection
