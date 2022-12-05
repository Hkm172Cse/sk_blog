@extends('front_end.layout.app',['footer_left'=>$footer_left, 'footer_right'=>$footer_right])
@section('content')
<!--banner-sec-->
@include('front_end.Client.banner')
<!--banner-sec-->
<!--detail-sec-->
@include('front_end.Client.text')
<!--detail-sec-->
@include('front_end.Client.clientList')

<!--overview-sec-->

<!--form-sec-->
@include('front_end.contact.contact')
@endsection