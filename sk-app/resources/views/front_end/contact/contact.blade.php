@foreach($contact_data as $val)
<div class="form-section w-100 float-left padding-top padding-bottom position-relative">
   <div class="container">
      <div class="form-inner-sec position-relative">
         <div class="form-headings text-center">
            <h5>{{$val->name}}</h5>
            <h2>{{$val->title}}</h2>
         </div>
         <div class="form-text">
            <form class="form-con" action="{{route('get.in.touch')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="subject" value="{{$val->subject}}"/>
               <ul class="list-unstyled">
                  <li class="float-left"><input class="w-100" placeholder="Name" name="name" type="text" name="name" id="name"></li>
                  <li class="float-left"><input class="w-100" type="text" name="phone" placeholder="Phone" name="phone" id="phone">
                  </li>
                  <li class="float-left"><input class="w-100" type="text" name="email" placeholder="Email" name="email" id="email">
                  </li>
                  <li class="w-100"><textarea class="w-100" name="message" placeholder="Message"></textarea></li>
                  <li class="mb-0 w-100 text-center"><input class="form-button" type="submit" value="Send Now"></li>
               </ul>
            </form>
         </div>
      </div>
   </div>
</div>
@endforeach