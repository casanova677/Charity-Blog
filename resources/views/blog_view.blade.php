@extends('layouts.blog')

@section('content')

    <div class="tp-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcumb-wrap">
                        <h2>Blog View</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>Blog View</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .tp-breadcumb-area end -->
    <!-- tp-event-area start -->
    <!-- end of header -->
    <!-- start tp-blog-single-section -->
    <section class="tp-blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-10 col-md-offset-1 ">
                    <div class="tp-tp-blog-content clearfix">
                        <div class="post">
                            <div class="entry-media">
                                <img src="{{ asset('public/image/' . $blog->image) }}" alt="post image">
                            </div>
                            <ul class="entry-meta">
                                <li>
                                    <p><img src="{{ asset('assets/images/blog/admin.jpg') }}" alt> By Admin</p>
                                </li>
                                <li>
                                    <p><i class="ti-calendar"></i> {{ $blog->created_at->format('M d,Y \a\t h:i a') }}
                                    </p>
                                </li>
                                <li><a href="{{ route('like', $blog) }}"><i class="ti-heart"></i>
                                        {{ number_format($blog->likes) }}</a></li>
                            </ul>
                            <h3><a href="#">{{ $blog->title }}</a></h3>
                            <p>{{ $blog->body }}</p>
                            
                        </div>
                        <div class="tag-share clearfix">
                            <div class="tag">
                                <ul>
                                   
                                    <li><a href="#">Marketing</a></li>
                                    
                                </ul>
                            </div>
                            <div class="share">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- end tag-share -->
                        <div class="author-box">
                            <div class="author-avatar">
                                <a href="#" target="_blank"><img src="{{ asset('assets/images/blog-details/author.jpg') }}"
                                        alt></a>
                            </div>
                            <div class="author-content">
                                <a href="#" class="author-name">{{$user->name}}</a>
                                <p>{{ $blog->title }}</p>
                                <div class="author-btn">
                                    <a href="/blog">All Post From Author</a>
                                </div>
                            </div>
                        </div> <!-- end author-box -->
                        
                    </div>
                    <div class="tp-blog-single-section wrap-even">
                        <div class="comments-area">
                            <div class="comments-section">
                                <h3 class="comments-title">Comments</h3>
                                <ol class="comments">
                                    <li class="comment even thread-even depth-1" id="comment-1">
                                       
                                        <ul class="children">
                                            @foreach ($comments as $comment )
                                                
                                            
                                            <li class="comment">
                                                <div>
                                                    <div class="comment-theme">
                                                        <div class="comment-image"><img
                                                                src="{{ asset('assets/images/blog-details/comments-author/img-2.jpg') }}"
                                                                alt></div>
                                                    </div>
                                                    <div class="comment-main-area">
                                                        <div class="comment-wrapper">
                                                            <div class="comments-meta">
                                                                <h4>{{$comment->names}} <span class="comments-date">{{$comment->created_at->format('M d,Y \a\t h:i a')}}</span></h4>
                                                            </div>
                                                            <div class="comment-area">
                                                                <p>{{$comment->body}}</p>
                                                                <div class="comments-reply">
                                                                    <a class="comment-reply-link" 
                                                                    href="#"><span><i class="fa fa-reply" aria-hidden="true"></i> Reply</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ol>
                            </div> <!-- end comments-section -->
                        </div> <!-- end comments-area -->
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a Comment</h3>
                            <form method="post" id="commentform" class="comment-form" action="{{ route('comment', $blog) }}">
                                @csrf
                                <div class="form-inputs">
                                    <input placeholder="Name" type="text" name="names">
                                    <input placeholder="Email" type="email" name="email">
                                </div>
                                <div class="form-textarea">
                                    <textarea id="comment" placeholder="Write Your Comments..." name="body"></textarea>
                                </div>
                                <div class="form-submit">
                                    <input id="submit" value="Reply" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end tp-blog-single-section -->
    <!-- news-letter-section start-->
    <section class="news-letter-section s2">
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
                                        <input type="text" placeholder="Enter Your Email" class="form-control" name="email">
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

@stop
