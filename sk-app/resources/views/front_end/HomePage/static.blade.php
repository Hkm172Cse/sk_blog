
@foreach($static as $val)
<div class="static-section w-100 float-left">
         <div class="container">
            <div class="static-text w-100 float-left position-relative">
               <ul>
                  <li>
                     <div class="static-price count">{{$val->project_num}}</div>
                     <span style="font-size:18px;">Projects <br style="font-size:18px;"> Done</span>
                  </li>
                  <li>
                     <div class="static-price count">{{$val->customer_num}}</div>
                     <small class="d-inline-block percentage">%</small>
                     <span>Customer <br> Satisfication</span>
                  </li>
                  <li class="mb-0">
                     <div class="static-price count">{{$val->data_num}}</div>
                     <span>Data <br> Analyst Input</span>
                  </li>
                  <li class="mr-0 mb-0">
                     <div class="static-price count">{{$val->class_base_num}}</div>
                     <small class="plus d-inline-block">+</small>
                     <span>World Class <br> Base</span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
@endforeach

