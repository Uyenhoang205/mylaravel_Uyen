@extends('layout.layout')

@section('title', 'Create product')

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
<div class="content container">
    <form method="POST" action="{{ route('product-store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm</label>
            <input type="text" class="name form-control" name="name" id="exampleFormControlInput1" placeholder="Tên sản phẩm">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Giá sản phẩm</label>
            <input type="number" class="price form-control" name="price" id="exampleFormControlInput1" placeholder="Giá sản phẩm">
        </div>
        <!-- <div class="mb-3">
        <label for="formFile" class="image form-label">Ảnh sản phẩm</label>
        <input class="image form-control" type="file" id="formFile">
        </div> -->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ảnh sản phẩm</label>
            <input type="text" class="image form-control" name="image" id="exampleFormControlInput1" placeholder="Ảnh sản phẩm">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Thông tin sản phẩm</label>
            <textarea class="description form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Điểm đánh giá sản phẩm</label>
            <input type="number" class="rate form-control" name="rate" id="exampleFormControlInput1" placeholder="Điểm đánh giá sản phẩm">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" style="margin-left: 45%; margin-top: 30px;">Đăng tải</button>
        </div>
    </form>
</div>

@section('footer')
@include('/shoping-cart/footer')
@endsection

@section('script')

<script type="text/javascript">
    //abc
</script>
@endsection