<div class="about-sec about-us-sec w-100 float-left padding-bottom" data-aos="fade-up" data-aos-duration="700">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">

                <div class="about-left-sec">
                    @foreach($aboutusimg as $img)
                    <figure class="mb-0 left-sec">
                        <img src="{{asset('images/about/'.$img->image_one)}}" alt="about-us-sec-img">
                    </figure>
                    <figure class="presentation">
                        <img src="{{asset('images/about/'.$img->image_three)}}" alt="about-presentation-img">
                    </figure>
                    <figure class="discussion">
                        <img src="{{asset('images/about/'.$img->image_two)}}" alt="about-discussion-img">
                    </figure>
                    @endforeach
                </div>

            </div>
            <div class="col-lg-6 col-md-6">
                @foreach($aboutUsText as $text)
                <div class="about-right-sec about-us-right">
                    <h5>{{$text->name}}</h5>
                    <h2>{{$text->title}}</h2>
                    <p class="text-justify">{{$text->des}}</p>

                    <div class="generic-button about-button">
                        <a class="d-inline-block" href="#">Get Started</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="about-sec about-us-sec w-100 float-left padding-bottom" data-aos="fade-up" data-aos-duration="700">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-left-sec about-us-left">
                    <h2>We’re all About To Helping You</h2>
                    <p class="text-justify">We have grown to become one of the leading professionals in consultancy
                        services and managing business operations. In such a short space of time we have grasped on to
                        the high level of demand in both industries and have led to become instinctive in decision
                        making, professional on the advice we provide to our clients.</p>
                    <p class="text-justify">Supporting the core values of the operations within a business, our aim is
                        to become one of the leading, trusted partners in the business world to our clients, delivering
                        undistinguishable reliable, quality service to exceed client expectations.</p>
                    <div class="generic-button about-button">
                        <a class="d-inline-block" href="#">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-right-sec">
                    @foreach($aboutUsText as $text)
                    <figure class="mb-0 left-sec">
                        <img src="{{asset('images/about/'.$img->image_one)}}" alt="about-us-sec-img">
                    </figure>
                    <figure class="presentation">
                        <img src="{{asset('images/about/'.$img->image_three)}}" alt="about-presentation-img">
                    </figure>
                    <figure class="discussion">
                        <img src="{{asset('images/about/'.$img->image_two)}}" alt="about-discussion-img">
                    </figure>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>