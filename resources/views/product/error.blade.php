@extends('layout.layout')

@section('title', 'Shopping Cart')

@section('css')
<style type="text/css">
    .content {
        min-height: 630px;
        padding-top: 40px;
    }
</style>

@endsection

@section('content')
@include('/shoping-cart/header')

<div class="alert alert-danger" role="alert">
  Lỗi ~ . Vui lòng làm lại.
</div>

@section('footer')
@include('/shoping-cart/footer')
@endsection

@section('script')

<script type="text/javascript">
    //abc
</script>
@endsection