@extends('layouts.home')

@section('content')
    <!-- start page-wrapper -->


    <!-- start of hero -->
    <section class="hero hero-style-1">
        <div class="hero-slider">
            <div class="slide">
                <div class="container">
                    <img src="assets/images/human1.jpg" alt class="slider-bg">
                    <div class="row">
                        <div class="col col-md-6 slide-caption">
                            <div class="slide-title">
                                <h2>Let’s be Kind for <span>Children</span></h2>
                            </div>
                            <div class="slide-subtitle">
                                <p>Humanitarian crisis in Ukraine</p>
                                <p>Support our work around the world</p>
                            </div>
                            <div class="btns">
                                <a href="/donate" class="theme-btn">Donate Now</a>
                                <a href="/about" class="theme-btn-s2">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="container">
                    <img src="assets/images/home2.jpg" alt class="slider-bg">
                    <div class="row">
                        <div class="col col-md-6 slide-caption">
                            <div class="slide-title">
                                <h2>Let’s be Kind for <span>Children</span></h2>
                            </div>
                            <div class="slide-subtitle">
                                <p>Singapore Red Cross raises $2m in donations for war-torn Ukraine</p>
                                <p>First tranche of aid has arrived</p>
                            </div>
                            <div class="btns">
                                <a href="/donate" class="theme-btn">Donate Now</a>
                                <a href="/about" class="theme-btn-s2">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="container">
                    <img src="assets/images/slider/slide-4.jpg" alt class="slider-bg">
                    <div class="row">
                        <div class="col col-md-6 slide-caption">
                            <div class="slide-title">
                                <h2>Let’s be Kind for <span>Children</span></h2>
                            </div>
                            <div class="slide-subtitle">
                                <p>High Quality Charity Theme in Envato Market.</p>
                                <p>You Can Satisfied Yourself By Helping.</p>
                            </div>
                            <div class="btns">
                                <a href="/donate" class="theme-btn">Donate Now</a>
                                <a href="/about" class="theme-btn-s2">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->
    <!--features start -->
    <div class="features-area ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="features-item-2">
                        <div class="features-icon">
                            <i class="fi flaticon-salad"></i>
                        </div>
                        <div class="features-content">
                            <p>Health For</p>
                            <h3>Healthy Food</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="features-item-2">
                        <div class="features-icon">
                            <i class="fi flaticon-school"></i>
                        </div>
                        <div class="features-content">
                            <p>Get Free</p>
                            <h3>Pure Education</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="features-item-2">
                        <div class="features-icon">
                            <i class="fi flaticon-medicine"></i>
                        </div>
                        <div class="features-content">
                            <p>Get Free</p>
                            <h3>Medical Facilities</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--features-features end -->
    <!-- about-area start-->
    <div class="about-style-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="about-img">
                        <img src="assets/images/about3.jpg" alt="">
                        <div class="video-btn">
                            <ul>
                                <li><a href="https://www.youtube.com/embed/uQBL7pSAXR8?autoplay=1" class="video-btn"
                                        data-type="iframe">
                                        <i class="fi flaticon-play-button"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="about-content">
                        <div class="section-title">
                            <h2>About Us</h2>
                        </div>
                        <p>The RCICU was founded in 1919 in Paris in the aftermath of World War I. Originally called the
                            League of Red Cross Societies, we were the brainchild of Henry Davison, the president of the
                            American Red Cross War Committee. Davison convened the League’s founding members—the Red Cross
                            Societies of France, Great Britain, Italy, Japan and the United States—at an international
                            medical conference. Together, they believed the compassion and expertise shown by Red Cross
                            volunteers during wartime could be shown in peacetime too.</p>
                        <p> The League’s first objective was simple: improve the health of people in countries that had
                            suffered greatly during the war. It also sought to improve existing Red Cross Societies and
                            promote the creation of new ones around the world. Within months of its creation, the League had
                            launched a campaign to counter a massive typhus epidemic in Eastern Europe. Shortly after, it
                            launched appeals in the wake of the Russian famine of 1921 and the Great Kanto earthquake in
                            Japan in 1923.</p>
                        <div class="btns">
                            <div><a class="theme-btn" href="/about">More About Us..</a></div>
                        </div>
                        <div class="signature">
                            <img src="assets/images/img-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-area end-->
    <!-- case-area-start -->
    <div class="case-area section-padding">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title text-center">
                    <div class="thumb-text">
                        <span>CAUSES</span>
                    </div>
                    <h2>Latest Causes of RCICU.</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($causes as $cause)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cause-item">
                            <div class="cause-top">
                                <div class="cause-img">
                                    <img src="{{ asset('storage/public/image/' . $cause->image) }}" alt="">
                                    <div class="case-btn">
                                        <a href="/donate" class="theme-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-text">
                                <ul>
                                    <li><a href="#">GOAL : ${{ $cause->goal }}</a></li>
                                    <li><a href="#">RISED : ${{ $cause->raised }}</a></li>
                                </ul>
                                <h3><a href="#">{{ $cause->title }}</a></h3>
                                <p>{{ $cause->body }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- case-area-end -->
    <!-- .tp-counter-area start -->
    <div class="tp-counter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-counter-grids">
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="20000">00</span>+</h2>
                            </div>
                            <p>Donations</p>
                        </div>
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="800">00</span>M+</h2>
                            </div>
                            <p>Funds Raised</p>
                        </div>
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="245">00</span>+</h2>
                            </div>
                            <p>Volunteers</p>
                        </div>
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="905">00</span>+</h2>
                            </div>
                            <p>Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .tp-counter-area end -->
    <!--Start project area-->
    <section id="protfolio" class="gallery-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12 sortable-gallery">
                    <div class="gallery-filters">
                        <div class="section-title">
                            <h2>Our Gallery</h2>
                        </div>
                        <ul>
                            <li><a data-filter="*" href="#" class="current">All</a></li>
                            <li><a data-filter=".Child" href="#">Child</a></li>
                            <li><a data-filter=".Charity" href="#">Charity</a></li>
                            <li><a data-filter=".Volunteering" href="#">Volunteering</a></li>
                            <li><a data-filter=".Sponsorship" href="#">Sponsorship</a></li>
                        </ul>
                    </div>
                    <div class="gallery-container gallery-fancybox masonry-gallery">
                        <div class="grid Sponsorship">
                            <a href="assets/images/gallery/img-1.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="assets/images/gallery/img-1.jpg" alt class="img img-responsive">
                                <div class="icon">
                                    <div class="parallax-wrap">
                                        <div class="parallax-element">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid Charity Volunteering">
                            <a href="assets/images/gallery/photo1.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="assets/images/photo1.jpg" alt class="img img-responsive">
                                <div class="icon">
                                    <div class="parallax-wrap">
                                        <div class="parallax-element">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid Charity Volunteering">
                            <a href="assets/images/gallery/photo2.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="assets/images/photo2.jpg" alt class="img img-responsive">
                                <div class="icon">
                                    <div class="parallax-wrap">
                                        <div class="parallax-element">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid Volunteering">
                            <a href="assets/images/gallery/photo3.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="assets/images/photo3.jpg" alt class="img img-responsive">
                                <div class="icon">
                                    <div class="parallax-wrap">
                                        <div class="parallax-element">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid Charity Volunteering">
                            <a href="assets/images/photo4.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="assets/images/photo4.jpg" alt class="img img-responsive">
                                <div class="icon">
                                    <div class="parallax-wrap">
                                        <div class="parallax-element">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid Child ">
                            <a href="assets/images/gallery/img-2.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="assets/images/gallery/img-2.jpg" alt class="img img-responsive">
                                <div class="icon">
                                    <div class="parallax-wrap">
                                        <div class="parallax-element">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid  Sponsorship">
                            <a href="assets/images/gallery/img-3.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="assets/images/gallery/img-3.jpg" alt class="img img-responsive">
                                <div class="icon">
                                    <div class="parallax-wrap">
                                        <div class="parallax-element">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid Child">
                            <a href="assets/images/gallery/img-4.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="assets/images/gallery/img-4.jpg" alt class="img img-responsive">
                                <div class="icon">
                                    <div class="parallax-wrap">
                                        <div class="parallax-element">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid  Sponsorship">
                            <a href="assets/images/gallery/img-5.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="assets/images/gallery/img-5.jpg" alt class="img img-responsive">
                                <div class="icon">
                                    <div class="parallax-wrap">
                                        <div class="parallax-element">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="grid Child  Sponsorship ">
                            <a href="assets/images/child1.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="assets/images/child1.jpg" alt class="img img-responsive">
                                <div class="icon">
                                    <div class="parallax-wrap">
                                        <div class="parallax-element">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </section>
    <!--End project area-->
    <!-- start team-section -->

    <!-- end team-section -->
    <!-- start event-section -->
    <section class="event-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span>Our Events</span>
                <h2>Upcoming Events</h2>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="event-grids clearfix">
                        @foreach ($events as $event)
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ asset('public/image/' . $event->image) }}" alt>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li><a href="#"><i class="ti-calendar"></i> {{ $event->created_at }}</a></li>
                                        <li><a href="#"><i class="ti-folder"></i> {{ $event->category }}</a></li>
                                    </ul>
                                    <h3><a href="#">{{ $event->title }}</a></h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end event-section -->
    <!-- tp-cta-area start -->
    <div class="tp-cta-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-cta-text">
                        <h2>You Can Help The Poor With Us</h2>
                        <p>It is dismaying that after enduring eight years of conflict, people now face more violence, pain,
                            loss and turmoil. Fear, freezing temperatures and an uncertain future are what families in
                            Ukraine are facing. Please donate. </p>
                        <div class="btns">
                            <a href="/donate" class="theme-btn">Donate Now</a>
                            <a href="/volunteer" class="theme-btn-s2">Join Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-cta-area end -->
    <!-- start blog-section -->
    <section class="blog-section section-padding">
        <div class="container">
            <div class="col-l2">
                <div class="section-title text-center">
                    <span>From Our Blog</span>
                    <h2>Latest News</h2>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="blog-grids clearfix">
                        @foreach ($blogs as $blog)
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="{{ asset('storage/public/image/'. $blog->image) }}" alt="">
                                </div>
                                <div class="details">
                                    <h3><a href="{{ route('blog_view', $blog) }}">{{ $blog->title }}</a></h3>
                                    <p>{{ $blog->highlight }}</p>
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="assets/images/blog/7.jpg" alt="">
                                            By <a href="#">Admin</a>
                                        </li>
                                        <li>{{ $blog->created_at->format('M d,Y \a\t h:i a') }}</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-section -->
    <!-- news-letter-section start-->
    <section class="news-letter-section">
        <div class="container">
            <div class="news-letter-wrap">
                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2">
                        <div class="newsletter">
                            <h3>SUBSCRIBE TO THE RCICU NEWSLETTER</h3>
                            <p>Subscribe to get our latest newsletters and updates.</p>
                            @if (session('done'))
                                <div class="alert alert-success">
                                    {{ session('done') }}
                                </div>
                            @endif
                            <div class="newsletter-form">
                                <form method="POST" action="/subscribe">
                                    @csrf
                                    <div>
                                        <input type="text" placeholder="Enter Your Email" class="form-control"
                                            name="email">
                                        <button class="bigCursor" type="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- news-letter-section end-->
@endsection
