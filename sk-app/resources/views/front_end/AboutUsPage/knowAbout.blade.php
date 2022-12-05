<section class=" blog-posts w-100 float-left padding-top padding-bottom two-column-blog">
    @foreach($know_heading as $head)
    <div class="client-heading text-center pb-4">
        <h5>{{$head->title}}</h5>
        <h2>{{$head->des}}</h2>
    </div>
    @endforeach
    <div class="container">
        <div class="row">
            <div id="blog" class="col-xl-12 wow fadeInUp">
                <p class="text-justify">Here you will find useful information about our company and the services we
                    provide to our clients. Our ambition is to become one of the leading consultancies in today's
                    market.</p>
                <p class="text-justify pb-4"> We are committed to helping our clients achieve their goals by providing
                    commercially focused advice of the highest quality that will consistently exceed their expectations.
                    We ensure we can provide benefit to our clients by combining the highest standards of business and
                    law with local excellence of service and by maintaining the depth, quality and scale of resources
                    necessary to meet our clients’ needs whenever and wherever they arise.</p>
                <div class="row">
                    @foreach($aboutContent as $content)
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="float-left w-100 post-item border mb-4">
                            <div class="post-item-wrap position-relative">
                                <div class="post-image">
                                    <a href="about.delivering.details.php">
                                        <img alt="{{$content->image}}" src="{{asset('images/about/'.$content->image)}}"/> </a>
                                    </span>
                                    <!--post-image-->
                                </div>
                                <div class="post-item-description">

                                    <h2><a href="about.delivering.details.php">{{$content->title}} </a></h2>
                                    <p class="text-justify">{{$content->des}}</p>
                                    <a href="about.delivering.details.php" class="item-link">Read More<span
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