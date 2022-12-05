<div class="staff-sec w-100 float-left padding-top padding-bottom">
    <div class="container">
        <div class="team-headings text-center">
            <h5>Our Staff</h5>
            <h2>Our Team Members</h2>
        </div>
        <div class="team-main-sec">
            <div class="row" data-aos="fade-up" data-aos-duration="700">
                @foreach($staff as $val)
                <div class="col-lg-4 col-md-4">
                    <div class="team-report position-relative">
                        <figure class="mb-0">
                            <img src="{{asset('images/team/'.$val->image)}}" alt="rayan-img" class="img-fluid">
                        </figure>
                        <div class="employe-detail">
                            <h4>{{$val->name}}</h4>
                            <span class="d-inline-block">{{$val->title}}</span>
                            <div class="staff-social-links">
                                <ul class="d-inline-block mb-0 list-unstyled">
                                    <li class="d-inline-block"><a href="#"><i
                                                class="fab fa-facebook-f d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                    <li class="d-inline-block"><a href="#"><i
                                                class="fab fa-twitter d-flex align-items-center justify-content-center ml-0 mr-0 "></i></a>
                                    </li>
                                    <li class="d-inline-block"><a href="#"><i
                                                class="fab fa-instagram d-flex align-items-center justify-content-center mb-0"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-icons">
                            <a href="#"><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div> 
        </div>
    </div>
</div>