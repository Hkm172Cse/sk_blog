<div class="benefits-main-sec w-100 float-left" data-aos="fade-up" data-aos-duration="700">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xl-12 ">
                <div class="overview-left-sec ">
                    <h5 class="text-center mr-5">Portfolio</h5>
                    <h3 class="text-center pb-5 mr-5">Our Business</h3>
                    <div class="col-lg-6 col-xl-6 float-left ">
                        <h4>Active</h4>
                        <p>The following of our business are currently active. </p>
                        @foreach($active as $active)
                        <ul class="text-muted ">
                            <li>{{$active->name}} - <a href="{{$active->link}}">{{$active->link}}</a></li>
                        </ul>
                        @endforeach
                    </div>
                    <div class="col-lg-6 col-xl-6 float-right ">
                        <h4>Upcoming</h4>
                        @foreach($upcomming as $upcomming)
                        <ul class="text-muted">
                            <li>{{$upcomming->name}}} - <a href="{{$upcomming->link}}">{{$upcomming->link}}</a> </li>
                        </ul>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>