<div class="testimonials-sec w-100 float-left padding-bottom padding-top  position-relative">
    <div class="container">
        <div class="testimonials-inner-sec position-relative">
            <div class="testimonials-headings text-center" data-aos="fade-down" data-aos-duration="700">
                <h5>Testimonials</h5>
                <h2>What Our Client are Saying</h2>
            </div>
            <div id="carouselExampleControls" class="carousel slide position-relative " data-ride="carousel">
                <div class="carousel-inner" data-aos="fade-up" data-aos-duration="700">

                    @php $i=0 @endphp
                    @foreach($review as $val)
                    @php $i++ @endphp
                    <div class="carousel-item @if($i==1) active @endif text-center">
                        <figure>
                            <img style="width:100px; height:100px; border-radius:50%" src="{{asset('/images/review/'.$val->image)}}" alt="slider-right2-img">
                        </figure>
                        <p>{{$val->review}}</p>
                        <div class="stars-img">
                            <figure>
                                <img src="{{asset('front_end/image/stars-icon.png')}}" alt="stars-icon">
                            </figure>
                        </div>
                        <h4>{{$val->client_name}}</h4>
                        <span>{{$val->designation}}</span>
                    </div>
                    @endforeach


                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="bi bi-arrow-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="bi bi-arrow-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>