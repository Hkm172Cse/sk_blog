@foreach($aboutus as $val)
<div id="aboutSection" class="about-sec w-100 float-left padding-top" data-aos="fade-up" data-aos-duration="700">
         <div class="container">
            <div class="row mt-5">
               <div class="col-lg-5 col-md-5">
                  <div class="about-left-con">
                     <figure class="position-relative">
                        <img style="width:414px; height:473px" src="{{asset('images/about_us/'.$val->img_one)}}" alt="about-sec-img">
                     </figure>
                  </div>
               </div>
               <div class="col-lg-7 col-md-7 ">
                  <div class="about-right-con">
                     <h5>{{$val->title}}</h5>
                     <h3 class=""> {{$val->sort_des}} </h3>
                     <p class="text-justify">{{$val->des}}</p>
                  </div>
               </div>
            </div>
            <div class="about-video position-relative d-inline-block">
                  <div class="videoCoverImage">
                    <div onclick="thevid=document.getElementById('thevideo'); thevid.style.display='block'; this.style.display='none'">
                      <img class="thumb" style="cursor: pointer;" src="{{asset('front_end/image/video-poster.jpg')}}">
                      <div class="video-wrap position-absolute">
                        <img src="{{asset('front_end/image/youtube-icon.png')}}" alt="youtube-icon.png">
                     </div>
                    </div>
                    <div id="thevideo" style="display: none;">
                     <iframe width="880" height="462" src="https://www.youtube.com/embed/LlXNxmDMeFE?rel=0;&amp;autoplay=1&amp;mute=1&amp;loop=1" frameborder="0" allowfullscreen="" include=""></iframe>
                    </div>
                  </div>
            </div>
         </div>
      </div>
@endforeach