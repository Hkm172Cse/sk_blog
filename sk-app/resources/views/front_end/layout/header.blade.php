<header id="header-con" class="w-100">
   <div class="wrapper">
      <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
         <a class="navbar-brand pl-4" href="./">
            <figure class="mb-0">
               <img src="{{asset('front_end/image/sk-logo.png')}}" alt="navbar-icon">
            </figure>
         </a>
         <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end pr-5" id="navbarSupportedContent">
            <ul class="navbar-nav nav-btn">
               <li class="nav-item active pl-0">
                  <a class="nav-link p-0 @if(Request::url()=='http://127.0.0.1:8000/tech_ics/home')is-active @endif" href="{{route('homepage')}}">Home<span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link p-0 @if(Request::url()=='http://127.0.0.1:8000/tech_ics/aboutus')is-active @endif" href="{{route('aboutus')}}">About us</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link p-0 @if(Request::url()=='http://127.0.0.1:8000/tech_ics/community')is-active @endif" href="{{route('community.page')}}">Community</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link p-0 @if(Request::url()=='http://127.0.0.1:8000/tech_ics/portfolio')is-active @endif" href="{{route('website.portfolio')}}">Portfolio</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown" role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Services
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="https://www.icslegal.com/">ICS Legal</a>
                     <a class="dropdown-item" href="https://www.techics.com">Tech ICS</a>
                     <a class="dropdown-item" href="https://321ics.com/">321 ICS</a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link p-0 @if(Request::url()=='http://127.0.0.1:8000/tech_ics/client')is-active @endif" href="{{route('website.client')}}">Clients</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link p-0 @if(Request::url()=='http://127.0.0.1:8000/tech_ics/our_team')is-active @endif" href="{{route('website.our_team')}}">Team</a>
               </li>
            </ul>
            <div class="navbar-btn">
               <a href="contact-us.php">Contact us</a>
            </div>
            <div class="navbar-contact-sec float-left position-relative">
               <figure class="mb-0 float-left d-flex align-items-center justify-content-center position-absolute">
                  <i class="bi bi-telephone-plus contact-icon"></i>
               </figure>
               <div class="contact-box">
                  <span class="d-block">Call us at:</span>
                  <span class="contact-number">0207 237 3388</span>
               </div>
            </div>
         </div>
      </nav>
   </div>
</header>