@extends('layout.layout')

@section('title', 'Shopping Cart')

@section('css')

@endsection

@section('content')

@include('/shoping-cart/header')

@include('/shoping-cart/banner')

@include('/shoping-cart/content')

@endsection

@section('footer')
@include('/shoping-cart/footer')
@endsection

@section('script')

<script type="text/javascript">
   //abc
</script>
@endsection