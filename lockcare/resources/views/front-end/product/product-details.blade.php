@extends('front-end.master')
@section('title')
    Singel | Product
@endsection
@section('bodyContent')
    <main class="main-container">
        <section class="product_content_area pt-40">
            <!-- start of page content -->

            <div class="lookcare-product-single container">

                <div class="row">

                    <div class="main col-xs-12" role="main">

                        <div class=" product">

                            <div class="row">

                                <div class="col-md-5 col-sm-6 summary-before ">

                                    <div class="product-slider product-shop">
                                        <span class="onsale">Sale!</span>
                                        <ul class="slides">
                                            <li data-thumb="{{asset($product->product_image)}}">
                                                <a href="{{asset($product->product_image)}}" data-imagelightbox="gallery" class="hoodie_7_front">
                                                    <img src="{{asset($product->product_image)}}" class="attachment-shop_single" alt="image">
                                                </a>
                                            </li>
                                            {{--<li data-thumb="{{asset('/')}}front-end/img/temp-images/hoodie_7_back-140x140.jpg">
                                                <a href="{{asset('/')}}front-end/img/temp-images/hoodie_7_back.jpg" data-imagelightbox="gallery" class="hoodie_7_back">
                                                    <img src="{{asset('/')}}front-end/img/temp-images/hoodie_7_back-470x470.jpg" class="attachment-shop_single" alt="image">
                                                </a>
                                            </li>--}}

                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-7 product-review entry-summary">

                                    <h1 class="product_title">{{$product->product_name}}</h1>

                                    <div class="woocommerce-product-rating">
                                        <div class="star-rating" title="Rated 4.00 out of 5">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <a href="#reviews" class="woocommerce-review-link">(<span class="count">3</span> customer reviews)</a>
                                    </div>

                                    <div>
                                        <p class="price"><ins><span class="amount">BDT.{{$product->product_price}}</span></ins></p>
                                    </div>

                                    <p>{{$product->product_short_description}}</p>

                                    {{Form::open(['route'=>'add-to-cart','class'=>'variations_form cart','method'=>'POST'])}}
                                        <div class="quantity">
                                            <input type="number" step="1" name="product_quantity" value="1" title="Qty" class="input-text qty text" size="4" min="1">
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                        </div>

                                        <button type="submit" class="cart-button">Add to cart</button>

                                    {{Form::close()}}
                                    <div class="product_meta">



                                        <span class="sku_wrapper">SKU: <span class="sku">N/A</span>.</span>


                                        <span class="posted_in">Categories: <a href="#" rel="tag">Clothing</a>, <a href="#">Hoodies</a>.</span>


                                    </div>

                                    <div class="share-social-icons">

                                        <a href="#" target="_blank" title="Share on Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#" target="_blank" title="Share on Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" target="_blank" title="Pin on Pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a href="#" target="_blank" title="Share on Google+">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- .summary -->

                            </div>

                            <div class="wrapper-description">

                                <ul class="tabs-nav clearfix">
                                    <li class="active">Description</li>
                                    <li>Review (3)</li>
                                </ul>
                                <div class="tabs-container product-comments">

                                    <div class="tab-content">
                                        <section class="related-products">

                                            <h2>Product Description</h2>

                                            <p>
                                                {!!$product->product_long_description!!}
                                            </p>

                                            <h3 class="section-title">Related Products</h3>

                                            <div class="related-products-wrapper">

                                                <div class="related-products-carousel">

                                                    <div class="product-control-nav">
                                                        <a class="prev"><i class="fa fa-angle-left"></i></a>
                                                        <a class="next"><i class="fa fa-angle-right"></i></a>
                                                    </div>

                                                    <div class="products-top"></div>
                                                    <div class="row product-listing">
                                                        <div id="product-carousel" class="product-listing">
                                                            @foreach($relatedProducts as $relatedProduct)
                                                            <div class="product  item first ">
                                                                <article>
                                                                    <figure>
                                                                        <a href="{{route('product-details',['id'=>$relatedProduct->id,'categoryId'=>$relatedProduct->category_id])}}">
                                                                            <img src="{{asset($relatedProduct->product_image)}}" class="img-responsive" alt="T_2_front">
                                                                        </a>
                                                                        <figcaption><span class="amount">BDT.{{$relatedProduct->product_price}}</span></figcaption>
                                                                    </figure>

                                                                    <h4 class="title"><a href="{{route('product-details',['id'=>$relatedProduct->id,'categoryId'=>$relatedProduct->category_id])}}">{{$relatedProduct->product_name}}</a></h4>

                                                                    {{Form::open(['route'=>'add-to-cart','method'=>'POST'])}}
                                                                            <input type="hidden" step="1" name="product_quantity" value="1" title="Qty" class="input-text qty text" size="4" min="1">
                                                                            <input type="hidden" name="id" value="{{$relatedProduct->id}}">
                                                                            <button type="submit" class="button-add-to-cart" >Add to cart</button>
                                                                    {{Form::close()}}
                                                                    {{--<a href="#" class="button-add-to-cart">Add to cart</a>--}}
                                                                </article>
                                                            </div>
                                                            @endforeach

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </section>
                                    </div>



                                    <div class="tab-content">

                                        <div class="panel entry-content">

                                            <div id="reviews">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="comments">
                                                            <h3>3 reviews for Ship Your Idea</h3>

                                                            <ol class="commentlist">
                                                                <li class="comment depth-1">

                                                                    <div class="comment_container">

                                                                        <img alt="gravatar" src="{{asset('/')}}front-end/img/temp-images/com-grav1.jpg" class="avatar photo">
                                                                        <div class="comment-text">




                                                                            <p class="meta">
                                                                            <span class="star-rating" title="Rated 4.00 out of 5">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                                                                <strong>Stuart</strong> – <time datetime="2013-06-07T13:03:29+00:00">June 7, 2013</time>:
                                                                            </p>

                                                                            <div class="description">
                                                                                <p>Another great quality product that anyone who see’s me wearing has asked where to purchase one of their own.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <!-- #comment-## -->
                                                                <li class="comment  depth-1">

                                                                    <div class="comment_container">

                                                                        <img src="{{asset('/')}}front-end/img/temp-images/com-grav2.jpg" alt="image" class="avatar photo">
                                                                        <div class="comment-text">




                                                                            <p class="meta">
                                                                            <span class="star-rating" title="Rated 4.00 out of 5">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                                                                <strong>Ryan</strong> – <time datetime="2013-06-07T13:24:52+00:00">June 7, 2013</time>:
                                                                            </p>


                                                                            <div class="description">
                                                                                <p>This hoodie gets me lots of looks while out in public, I got the blue one and it’s awesome. Not sure if people are looking at my hoodie only, or also at my rocking bod.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <!-- #comment-## -->
                                                                <li class="comment depth-1">

                                                                    <div class="comment_container">

                                                                        <img src="{{asset('/')}}front-end/img/temp-images/com-grav3.jpg" alt="image" class="avatar photo">
                                                                        <div class="comment-text">

                                                                            <div class="star-rating" title="Rated 3 out of 5">
                                                                            </div>

                                                                            <p class="meta">
                                                                            <span class="star-rating" title="Rated 4.00 out of 5">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                                                                <strong>Maria</strong> – <time datetime="2013-06-07T15:53:31+00:00">June 7, 2013</time>:
                                                                            </p>


                                                                            <div class="description">
                                                                                <p>Ship it!</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <!-- #comment-## -->
                                                            </ol>


                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="review_form_wrapper">
                                                            <div id="review_form">
                                                                <div id="respond" class="comment-respond">
                                                                    <h3 class="comment-reply-title">Add a review </h3>
                                                                    <form action="#" method="post" id="commentform" class="comment-form">
                                                                        <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text"></p>
                                                                        <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="text"></p>
                                                                        <p class="comment-form-comment"><label for="comment">Your Review</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>
                                                                        <p class="form-submit">
                                                                            <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                                        </p>
                                                                    </form>
                                                                </div>
                                                                <!-- #respond -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>





                        </div>
                        <!-- #product-293 -->



                    </div>
                    <!-- end of main -->

                </div>
                <!-- end of .row -->

            </div>

            <!-- end of page content -->
        </section>

        <!-- service area -->
        <section class="block gray no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-box no-margin go-simple">
                            <div class="mini-service-sec">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mini-service">
                                            <i  class="fa fa-paper-plane"></i>
                                            <div class="mini-service-info">
                                                <h3>Worldwide Delivery</h3>
                                                <p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
                                            </div>
                                        </div><!-- Mini Service -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mini-service">
                                            <i  class="fa  fa-newspaper-o"></i>
                                            <div class="mini-service-info">
                                                <h3>Worldwide Delivery</h3>
                                                <p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
                                            </div>
                                        </div><!-- Mini Service -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mini-service">
                                            <i  class="fa fa-medkit"></i>
                                            <div class="mini-service-info">
                                                <h3>Friendly Stuff</h3>
                                                <p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
                                            </div>
                                        </div><!-- Mini Service -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mini-service">
                                            <i  class="fa  fa-newspaper-o"></i>
                                            <div class="mini-service-info">
                                                <h3>24/h Support</h3>
                                                <p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
                                            </div>
                                        </div><!-- Mini Service -->
                                    </div>
                                </div>
                            </div><!-- Mini Service Sec -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- end service area -->
    </main>
@endsection
