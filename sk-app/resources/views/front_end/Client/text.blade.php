@foreach($text as $val)
<section class="service-detail business-growth w-100 float-left" data-aos="fade-up" data-aos-duration="700">
    <div class="container">
        <div class="service-detail-sec">
            <div>
                <h2>CLIENTS</h2>
            </div>
            <div class="service-img">
                <figure>
                    <img src="{{asset('images/client/'.$val->image)}}" alt="service-detail-design-img">
                </figure>
            </div>
            <div class="service-detail-text">
                <p>{{$val->des}}</p>
            </div>
        </div>
    </div>
</section>
@endforeach