@extends('layouts.home')

@section('content')

     <!-- .tp-breadcumb-area start -->
     <div class="tp-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcumb-wrap">
                        <h2>Donate Now</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>Donate</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .tp-breadcumb-area end -->
  <!-- tp-event-area start -->
  <div class="tp-donation-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <img src="assets/images/donate.jpg" alt="">

                <br><br><p>We live in a war-torn world, where millions of people have their lives destroyed by conflict.</p>

                   <p> Amid the chaos and despair of conflict, the International Committee of the Red Cross is a unique sign of hope to those whose lives have been shattered by war. Our neutrality gives our staff access to conflict zones where they can save lives and help rebuild them.
                    
                    But as the pressure on our resources continues to grow, we need more funds to help the increasing number of men, women and children around the world who find themselves caught in the crossfire of conflict.</p>
                    
                   <p> YOUR DONATION GOES WHERE IT IS NEEDED MOST.
                    93.5% of your donation will go to fund our operations for people in need.</p>
            </div>
            <div class="col-lg-8 col-lg-offset-2">
                <div class="section-title text-center">
                    <div class="thumb-text">
                        <br><span>Donate</span>
                    </div>
                    <h2>Make a Donation</h2>
                </div>
                <div id="Donations" class="tab-pane">

                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div> 
                  @endif
                    <form action="/card_pay" method="POST">
                        @csrf
                        <div class="tp-donations-amount">
                            <h2>Your Donation</h2>
                            <input type="text" class="form-control" name="amount" id="text" placeholder="Enter Donation Amount">
                        </div>
                        <div class="tp-donations-details">
                            <h2>Details</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                    <input type="text" class="form-control" name="firstname" id="fname" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                    <input type="text" class="form-control" name="lastname" id="name" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                    <input type="text" class="form-control" name="address" id="Adress" placeholder="Address">
                                </div>
                                <div class="col-lg-12 col-12 form-group">
                                    <textarea class="form-control" name="message" id="note" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tp-doanation-payment">
                            <h2>Choose Your Payment Method</h2>
                            <div class="tp-payment-area">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tp-payment-option" id="open4">
                                            <div class="tp-payment-select">
                                                <ul>
                                                    <li class="addToggle">
                                                        <input id="add" type="radio" checked="checked" name="payment" value="30">
                                                        <label for="add">Payment By Card</label>
                                                    </li>
                                                    <li class="removeToggle">
                                                        <input id="remove" type="radio" name="payment" value="30">
                                                        <label for="remove">Offline Donation</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="open5" class="payment-name">
                                                <ul>
                                                    <li class="visa"><input id="1" type="radio" name="visa" value="visa">
                                                        <label for="1"><img src="assets/images/checkout/img-1.png" alt=""></label>
                                                    </li>
                                                    <li class="mas"><input id="2" type="radio" name="master" value="30">
                                                        <label for="2"><img src="assets/images/checkout/img-2.png" alt=""></label>
                                                    </li>
                                                    <li class="ski"><input id="3" type="radio" name="skrill" value="30">
                                                        <label for="3"><img src="assets/images/checkout/img-3.png" alt=""></label>
                                                    </li>
                                                    <li class="pay"><input id="4" type="radio" name="paypal" value="30">
                                                        <label for="4"><img src="assets/images/checkout/img-4.png" alt=""></label>
                                                    </li>
                                                    
                                                </ul>
                                                <div class="contact-form form-style">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-12">
                                                            <label>Card holder Name</label>
                                                            <input type="text" placeholder="Card holder Name" name="card_name" required>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-12">
                                                            <label>Card Number</label>
                                                            <input type="text" autocomplete="cc-number"name="card_num" placeholder="•••• •••• •••• ••••" required >
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-12">
                                                            <label>CVV</label>
                                                            <input type="text" name="cvv" autocomplete="off" placeholder="••••" required >
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-12">
                                                            <label>Expire Date</label>
                                                            <input type="date"  name="expiry" placeholder="•• / ••" required>
                                                        </div>
                                                                
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>

                                        <div id="crypto-option" class="crypto-option" style="display: none">
                                            <div class="col-lg-12 col-md-12 text-center ">
                                                <p>Scan the Barcode to Send your Donation to the Bitcoin Wallet</p>
                                               <br> <p>{!! $code !!}</p><br>

                                                <label >Bitcoin Address</label><br>
                                                <a onclick="copyEvent('copy')" id="copy">{{$aza}}</a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-area">
                            <button type="submit" class="theme-btn submit-btn">Donate Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tp-event-area end -->

@endsection