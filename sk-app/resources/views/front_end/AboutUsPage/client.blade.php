<div class="client-logos w-100 float-left padding-bottom padding-top">
    <div class="container">
        <div class="client-inner-logos position-relative" data-aos="fade-up" data-aos-duration="700">
            @foreach($partinerTitle as $title)
            <div class="client-heading text-center">
                <h5>{{$title->title}}</h5>
                <h2>{{$title->des}}</h2>
            </div>
            @endforeach
            <div class="row">
                @foreach($logo as $logo)
                <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                    <div class="company-logo">
                        <figure class="mb-0">
                            <img src="{{asset('images/about/'.$logo->logo)}}" alt="craft-logo">
                        </figure>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>