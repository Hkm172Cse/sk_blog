@extends('front_end.layout.app',['footer_left'=>$footer_left, 'footer_right'=>$footer_right])
@section('content')
<!--about-sec-->

@include('front_end.AboutUsPage.Banner')
<!--about-sec-->
@include('front_end.AboutUsPage.about')
<!--about-sec-->
<!--client-logos-sec-->
@include('front_end.AboutUsPage.client')
<!--client-logos-sec-->
<!--about statement & delebaring-->

<!--about statement & delebaring-->
@include('front_end.AboutUsPage.knowAbout')
<!--testimonials-sec-->
@include('front_end.HomePage.review')
<!--testimonials-sec-->
<!--video-sec-->
<div class="video-sec w-100 float-left padding-top padding-bottom">
    <div class="container">
        <div class="video-con position-relative">
            <div class="video-inner-sec">
                <iframe width="1111" height="590" src="https://www.youtube.com/embed/c6C7sm8LcPU"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!--video-sec-->
<!--form-sec-->
@include('front_end.contact.contact')
@endsection