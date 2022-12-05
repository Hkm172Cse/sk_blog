<div class="service-sec w-100 float-left padding-bottom padding-top">
    <div class="container">
        <div class="service-inner-sec position-relative">
            <div class="row">
                @foreach($service as $val)
                <div class="col-lg-4 pl-0 pr-0 col-md-4">
                    <div class="service-left-sec" data-aos="fade-right" data-aos-duration="700">
                        <h5>{{$val->section}}</h5>
                        <h2>{{$val->title}}</h2>
                        <p>{{$val->des}}</p>
                        <div class="service-button generic-button">
                            <a class="" href="#">{{$val->service_btn}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-8 pl-0 pr-0 col-md-8">
                    
                    <div class="service-right-sec w-100 float-left">
                    @php $classIndex = 0 @endphp
                    @foreach($service_r as $r_val)
                    @php $classIndex++ @endphp
                        <div class="service-box @if($classIndex %2 == 0) mr-0  @endif " data-aos="fade-down" data-aos-duration="700">
                            <figure class="float-left mb-0 t-icon">
                                <img src="{{asset('front_end/image/techlegal.png')}}" alt="service-icon1">
                            </figure>
                            <div class="service-box-text">
                                <h4>{{$r_val->name}}</h4>
                                <p>{{$r_val->title}}</p>
                            </div>
                            <div class="float-right">
                                <a href="{{$r_val->link}}"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>