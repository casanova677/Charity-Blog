@extends('layouts.home')

@section('content')
    <!-- .tp-breadcumb-area start -->
    <div class="tp-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcumb-wrap">
                        <h2>404</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>404</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .tp-breadcumb-area end -->
    <!-- start error-404-section -->
    <section class="error-404-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="content clearfix">
                        <h2>404</h2>
                        <div class="error-message">
                            <h3>Oops! Page Not Found!</h3>
                            <p>We’re sorry but we can’t seem to find the page you requested. This might be because you have
                                typed the web address incorrectly.</p>
                            <a href="index-2.html" class="theme-btn-s4">Back to home</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end error-404-section -->
@endsection
