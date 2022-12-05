<!DOCTYPE html>
<html lang="en">
   
<head>
    
      @include('front_end.layout.headers_link')
   </head>
   <body>
    <!--navbar-sec-->
   
    @include('front_end.layout.header')
      <!--navbar-sec-->
      
     @yield('content')
      <!--form-sec-->
      <!--footer-sec-->
       <!--Fotter Sec --> 
      
       @include('front_end.layout.footer')

      <!-- Cokkies-->
      

      @include('front_end.layout.cookie')
       <!-- Cokkies-->
      <!--footer-sec-->

      @include('front_end.layout.footer_links')
      
   </body>

</html>