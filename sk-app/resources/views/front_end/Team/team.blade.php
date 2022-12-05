@extends('front_end.layout.app',['footer_left'=>$footer_left, 'footer_right'=>$footer_right])
@section('content')
<!--banner-sec-->
@include('front_end.Team.banner')
<!--banner-sec-->
<!--team-sec-->
@include('front_end.Team.staff')
<!--team-sec-->
<!--client-logos-sec-->
@include('front_end.AboutUsPage.client')
<!--client-logos-sec-->
<!--form-sec-->
@include('front_end.contact.contact')
<!--form-sec-->
@endsection