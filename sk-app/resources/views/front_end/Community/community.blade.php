@extends('front_end.layout.app',['footer_left'=>$footer_left, 'footer_right'=>$footer_right])
@section('content')

@include('front_end.Community.Banner')
<!--about-sec-->
@include('front_end.Community.aboutOfCommunity')
<!--about-sec-->
<!--about statement & delebaring-->
@include('front_end.Community.know_community')
<!--about statement & delebaring-->

<!--form-sec-->
@include('front_end.contact.contact')

@endsection