@foreach($banner as $val)
<section class="banner-con w-100 float-left shape-left shape-right d-table">
            <div class="d-table-cell align-middle">
               <div class="container">
                  <div class="banner-sec position-relative">
                     <h1 class="position-relative d-inline-block" data-aos="fade-down" data-aos-duration="700">{{$val->sort_des}}</h1>
                     <p>{{$val->des}} <br> nulla pariatur nostrud exercitation.</p>
                     <div class="generic-button" data-aos="fade-up" data-aos-duration="700">
                        <a class="d-inline-block" href="{{$val->btn_one_link}}">{{$val->btn_one}}</a>
                        <a class="banner-button d-inline-block" href="{{$val->btn_two_link}}">{{$val->btn_two}}</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="banner-social-icons">
               <ul class="mb-0 list-unstyled">
                  <li><a href="#"><i class="fab fa-facebook-f d-flex align-items-center justify-content-center"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter d-flex align-items-center justify-content-center ml-0 mr-0 "></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in d-flex align-items-center justify-content-center mb-0"></i></a></li>
               </ul>
            </div>
            <div class="top-button position-relative">
               <a id="button" href="#" class="show"></a>
            </div>
</section>
@endforeach