@extends('layouts.home')

@section('content')
    <div class="tp-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcumb-wrap">
                        <h2>Latest News</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>Blog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .tp-breadcumb-area end -->
    <!-- start tp-blog-pg-section -->
    <section class="tp-blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8">
                    <div class="tp-tp-blog-content">
                        @foreach ($blogs as $blog )
                            
                        
                        <div class="post format-gallery">
                            <div class="entry-media post-slider">
                                <img src="../public/image/{{$blog->image}}" alt="post image">
                                <img src="assets/images/blog/img-6.jpg" alt>
                            </div>
                            <ul class="entry-meta">
                                <li><p><img src="assets/images/blog/admin.jpg" alt> By Admin</p></li>
                                <li><p><i class="ti-calendar"></i> {{$blog->created_at->format('M d,Y \a\t h:i a')}}</p></li>
                                <li><a href="{{ route('like', $blog) }}"><i class="ti-heart"></i> {{number_format($blog->likes)}}</a></li>
                            </ul>
                            <h3><a href="#">{{$blog->title}}</a></h3>
                            <p>{{$blog->body}}</p>
                            <a href="{{ route('blog_view', $blog) }}" class="read-more">Read More...</a>
                        </div>
                        @endforeach
                        <div class="pagination-wrapper pagination-wrapper-left">
                            <ul class="pg-pagination">
                                
                                {{$blogs->links()}}
                                
                            </ul>
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
                        <div class="widget category-widget">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#">Helping Poor</a></li>
                                <li><a href="#">Water Problem</a></li>
                                <li><a href="#">Charity</a></li>
                                <li><a href="#">Medical Campain</a></li>
                                <li><a href="#">Free Food</a></li>
                            </ul>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>Recent posts</h3>
                            <div class="posts">
                                @foreach ($blogs as $blog )
                                <div class="post">
                                    
                                    <div class="img-holder">
                                        <img src="../public/image/{{$blog->image}}" alt="post image">
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">{{$blog->title}}</a></h4>
                                        <span class="date">{{$blog->created_at->format('M d,Y \a\t h:i a')}}</span>
                                    </div>
                                    
                                </div>
                                @endforeach
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
        </div> <!-- end container -->
    </section>
    <!-- end tp-blog-pg-section -->
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
    <!-- news-letter-section end-->
@endsection
