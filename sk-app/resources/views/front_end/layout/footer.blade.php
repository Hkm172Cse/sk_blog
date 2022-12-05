<div class="footer-main-con w-100 float-left padding-bottom padding-top position-relative">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 pl-0 pr-0 col-md-3">
            <div class="footer-links" data-aos="fade-down" data-aos-duration="700">
               <h4>Useful Links</h4>
               <ul class="list-unstyled">
                  @foreach($footer_left as $val)
                  <li class="position-relative"><a class="d-inline-block" href="{{$val->link}}">{{$val->name}}</a></li>
                  @endforeach
               </ul>
            </div>
         </div>
         <div class="col-lg-3 col-md-3">
            <div class="footer-links" data-aos="fade-down" data-aos-duration="700">
               <h4>Useful Links</h4>
               <ul class="list-unstyled">
               @foreach($footer_right as $val)
                  <li class="position-relative"><a class="d-inline-block" href="{{$val->link}}">{{$val->name}}</a></li>
                  @endforeach
               </ul>
            </div>
         </div>
         <div class="col-lg-4 col-md-3">
            <div class="contact-info" data-aos="fade-up" data-aos-duration="700">
               <h4>Contact Info</h4>
               <ul class="list-unstyled">
                  <li class="position-relative"><i class="bi bi-telephone-fill"></i><a class="d-inline-block" href="#">0207 237 3388</a></li>
                  <li class="position-relative"><i class="bi bi-envelope-fill"></i><a class="d-inline-block" href="#">info@sk-associates.org</a></li>
                  <li class="position-relative"><i class="bi bi-geo-alt-fill"></i><span>Tech ICS Suite 11, City Business Centre,
                     Lower Road, London SE16 2XB</span></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-2 pl-lg-0 col-md-3">
            <div class="footer-social-icons" data-aos="fade-down" data-aos-duration="700">
               <h4>Social</h4>
               <ul class="d-inline-block mb-0 list-unstyled">
                  <li class="d-inline-block"><a href="#"><i class="fab fa-facebook-f d-flex align-items-center justify-content-center"></i></a></li>
                  <li class="d-inline-block"><a href="#"><i class="fab fa-twitter d-flex align-items-center justify-content-center ml-0 mr-0 "></i></a></li>
                  <li class="d-inline-block"><a href="#"><i class="fab fa-linkedin-in d-flex align-items-center justify-content-center mb-0"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="footer-text w-100 float-left text-center">
   <span class="d-inline-block">© 2022 SK-Associates 2006-2021 | Powered by Tech ICS | All rights reserved | The content and the source codes contained in this page and subsequent pages are the property of SK-Associates.</span>
</div>