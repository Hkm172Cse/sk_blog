@extends('front_end.layout.app',['footer_left'=>$footer_left, 'footer_right'=>$footer_right])
@section('content')

<!--banner-sec-->
@include('front_end.Portfolio.banner')
<!--banner-sec-->
<!--detail-sec-->
@include('front_end.Portfolio.text')
<!--detail-sec-->
@include('front_end.Portfolio.overview')

<!--overview-sec-->

<!--form-sec-->
@include('front_end.contact.contact')
@endsection