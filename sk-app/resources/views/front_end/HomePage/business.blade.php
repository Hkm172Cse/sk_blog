@foreach($business as $val)
<div class="business-sec w-100 float-left position-relative">
         <div class="container">
            <div class="business-con position-relative" data-aos="zoom-in-up" data-aos-duration="700">
               <div class="business-inner-sec text-center">
                  <h2>{{$val->title}}</h2>
                  <p>{{$val->sort_des}}</p>
                  <div class="generic-button">
                     <a class="d-inline-block" href="#">{{$val->button_one}}</a>
                     <a class="business-button d-inline-block" href="#">{{$val->button_two}}</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endforeach