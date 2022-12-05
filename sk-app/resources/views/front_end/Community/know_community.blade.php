<section class=" blog-posts w-100 float-left padding-top padding-bottom two-column-blog bg-light">
    <h5 class="text-center">Community</h5>
    <h2 class="text-center mt">Know About Our Community</h2>
    <div class="container">
        <div class="row">
            <div id="blog" class="col-xl-12 wow fadeInUp">
                <div class="row">
                @foreach($know as $val)
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="float-left w-100 post-item border mb-4">
                            <div class="post-item-wrap position-relative">
                                <div class="post-image">
                                    <a href="charities-community.php">
                                        <img alt="{{$val->image}}" src="{{asset('images/about/'.$val->image)}}"> </a>
                                    </span>
                                    <!--post-image-->
                                </div>
                                <div class="post-item-description">
                                    <h2><a href="charities-community.php">{{$val->title}} </a></h2>
                                    <p class="text-justify">{{$val->des}}</p>
                                    <a href="charities-community.php" class="item-link">Read More <span
                                            class="bi bi-arrow-right"></span></a>
                                    <!--post-item-description-->
                                </div>
                                <!--post-item-wrap-->
                            </div>
                            <!--post-item-->
                        </div>
                        <!--col-->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>