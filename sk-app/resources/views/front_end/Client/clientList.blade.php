<div class="benefits-main-sec w-100 float-left" data-aos="fade-up" data-aos-duration="700">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xl-12 ">
                <div class="overview-left-sec ">
                    <h5 class="text-center">Our Client</h5>
                    <h3 class="text-center">Our Client List</h3>
                    <ul class="list-group mt-5 list-group-light">
                        @foreach($list as $val)
                        <li class="list-group-item d-flex justify-content-between align-items-center border shadow">
                            <div class="d-flex align-items-center">
                                <img src="{{asset('images/client/'.$val->image)}}" alt=""
                                    style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3 client-txt">
                                    <p class="fw-bold mb-1">{{$val->name}} </p>
                                    <p class="text-muted  mb-0"><small> {{$val->title}}</small></p>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>

                </div>
            </div>
        </div>
    </div>