@extends('layouts.home')

@section('content')

 <!-- .tp-breadcumb-area start -->
 <div class="tp-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcumb-wrap">
                    <h2>Single Event</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><span>Event</span></li>
                        <li><span>{{$event->title}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .tp-breadcumb-area end -->
<!-- tp-event-details-area start -->
<div class="tp-case-details-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-8">
                <div class="tp-case-details-wrap">
                    <div class="tp-case-details-text">
                        <div id="Description">
                            <div class="tp-case-details-img">
                                <img src="assets/images/event-details2.jpg" alt="">
                            </div>
                            <div class="tp-case-content">
                                <div class="tp-case-text-top">
                                    <h2>Many Children are suffering a lot for food.</h2>
                                    <div class="case-b-text">
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                                        <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                        <p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures.</p>
                                    </div>
                                    <div class="case-bb-text">
                                        <h3>Event Mission</h3>
                                        <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure.</p>
                                        <ul>
                                            <li>Save The Children’s Role In Fight Against Malnutrition Hailed</li>
                                            <li>Charity Can Help Make Smile Of Poor People</li>
                                            <li>Else he endures pains to avoid worse pains.</li>
                                            <li>We denounce with righteous indignation and dislike men. </li>
                                            <li>Financial Help For Poor Families</li>
                                        </ul>
                                    </div>
                                    <div class="case-bb-text">
                                        <h3>Event Loacation</h3>
                                        <div id="Map" class="tab-pane">
                                            <div class="contact-map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-area sub-btn">
                                        <a href="donate.html" class="theme-btn submit-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-4">
                <div class="tp-blog-sidebar">
                    <div class="widget search-widget">
                        <h3>Search Here</h3>
                        <form>
                            <div>
                                <input type="text" class="form-control" placeholder="Search Post..">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget recent-post-widget">
                        <h3>Recent posts</h3>
                        <div class="posts">
                            <div class="post">
                                <div class="img-holder">
                                    <img src="assets/images/recent-posts/img-1.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="#">Many Children are suffering a lot for food.</a></h4>
                                    <span class="date">22 Sep 2021</span>
                                </div>
                            </div>
                            <div class="post">
                                <div class="img-holder">
                                    <img src="assets/images/recent-posts/img-2.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="#">Be kind for the poor people and the kids.</a></h4>
                                    <span class="date">22 Sep 2021</span>
                                </div>
                            </div>
                            <div class="post">
                                <div class="img-holder">
                                    <img src="assets/images/recent-posts/img-3.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="#">Be soft and kind for the poor people.</a></h4>
                                    <span class="date">22 Sep 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget tag-widget">
                        <h3>Tags</h3>
                        <ul>
                            <li><a href="#">Donations</a></li>
                            <li><a href="#">Charity</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Non Profit</a></li>
                            <li><a href="#">Poor People</a></li>
                            <li><a href="#">Helping Hand</a></li>
                            <li><a href="#">Video</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tp-event-details-area end -->
<!-- news-letter-section start-->
<section class="news-letter-section s2">
    <div class="container">
        <div class="news-letter-wrap">
            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2">
                    <div class="newsletter">
                        <h3>Subscribe our Newsletter</h3>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                        <div class="newsletter-form">
                            <form>
                                <div>
                                    <input type="text" placeholder="Enter Your Email" class="form-control">
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



@endsection
