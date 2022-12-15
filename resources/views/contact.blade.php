@extends('layouts.home')

@section('content')
    <!-- .tp-breadcumb-area start -->
    <div class="tp-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcumb-wrap">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>Contact</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .tp-breadcumb-area end -->
    <!-- start contact-pg-contact-section -->
    <section class="contact-pg-contact-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-6">
                    <div class="section-title-s3 section-title-s5">
                        <h2>Our Contacts</h2>
                    </div>
                    <div class="contact-details">
                        <p>The RCICU is fully committed to creating a safe, inclusive and dignified environment for the communities we serve, and for all our volunteers and staff.</p>

                           <p> Anyone can report any incident or misconduct that affects the integrity of IFRC personnel, assets or operations. This includes: fraud and corruption, sexual exploitation and abuse, harassment, child safeguarding, security incidents, health and safety, information security breaches and emblem misuse </p>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <h5>Our Location</h5>
                                <p>National Headquarters 2025 E Street, NW United States</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="ti-mobile"></i>
                                </div>
                                <h5>Phone</h5>
                                <p>+1 (205) 315‑9713</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="ti-email"></i>
                                </div>
                                <h5>Email</h5>
                                <p>support@rcicu.org</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="contact-form-area">
                        <div class="section-title-s3 section-title-s5">
                            <h2>Quick Contact Form</h2>
                        </div>
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
                        <div class="contact-form">
                            <form method="POST" action="/contact_us" >
                                @csrf
                                <div>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="address" id="address"
                                        placeholder="Address*">
                                </div>
                                <div class="comment-area">
                                    <textarea name="note" id="note" placeholder="Case description*"></textarea>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="theme-btn">Submit Now</button>
                                    
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end contact-pg-contact-section -->
@endsection
