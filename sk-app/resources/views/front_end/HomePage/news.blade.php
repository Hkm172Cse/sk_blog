<div class="blog-section w-100 float-left padding-top">
    <div class="container">
        <div class="blog-headings text-center" data-aos="fade-down" data-aos-duration="700">
            <h5>Our News</h5>
            <h2>Latest Blog Posts</h2>
        </div>
        <div class="row">
            @php $i = 0; @endphp
            @foreach($news as $val)
            @php ++$i; @endphp
            <div class="col-lg-4 col-md-4">
                <div class="blog-item" data-aos="fade-up" data-aos-duration="700">
                    <figure class="mb-0">
                        <a href="law.firm.legal-news.php"><img src="{{asset('/images/news/'.$val->image)}}"
                                alt="blog-img" class="img-fluid"></a>
                    </figure>
                    <div class="blog-content">
                        <h4>{{$val->title}}</h4>
                        <p>{{$val->news}}.</p>
                        <div class="author-details">
                            <div class="author">
                                <figure class="float-left mb-0">
                                    <img src="{{asset('front_end/image/blog-icon1.png')}}" alt="blog-icon1">
                                </figure>
                                <span class="d-inline-block">{{$val->tag}}</span>
                            </div>
                            <small class="float-right">{{$val->date}}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="generic-button blog-button text-center">
            <a href="news.php" class="d-inline-block">View All Blogs</a>
        </div>
    </div>
</div>