<div class="w-100 float-left mt-5 pt-5 " data-aos="fade-up" data-aos-duration="700">
    @foreach($aboutOfCommunity as $val)
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="about pb-5 mb-5">
                    <h5>{{$val->name}}</h5>
                    <h2 class="mb-5">{{$val->title}}</h2>
                    <p>{{$val->des}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>