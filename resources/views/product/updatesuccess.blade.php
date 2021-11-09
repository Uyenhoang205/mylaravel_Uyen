@extends('layout.layout')

@section('title', 'Thông báo thành công')

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

<div class="alert alert-success" role="alert">
   <h4>Update dữ liệu thành công</h4>
   <p>Click vào <a href="{{route('product-show', ['id' => $id])}}">update</a> để chỉnh sửa dữ liệu</p>
</div>

@section('footer')
@include('/shoping-cart/footer')
@endsection

@section('script')

<script type="text/javascript">
    //abc
</script>
@endsection