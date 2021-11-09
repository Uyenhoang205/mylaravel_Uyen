@extends('layout.layout')

@section('title', 'Edit product')

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
    <form method="POST" action="{{ route('product-update') }}">
        @csrf
        <input type="hidden" class="name form-control" name="id" id="exampleFormControlInput1" value="{{$product->id}}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm</label>
            <input type="text" class="name form-control" name="name" id="exampleFormControlInput1" value="{{$product->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Giá sản phẩm</label>
            <input type="number" class="price form-control" name="price" id="exampleFormControlInput1" value="{{$product->price}}">
        </div>
        <!-- <div class="mb-3">
        <label for="formFile" class="image form-label">Ảnh sản phẩm</label>
        <input class="image form-control" type="file" id="formFile">
        </div> -->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ảnh sản phẩm</label>
            <input type="text" class="image form-control" name="image" id="exampleFormControlInput1" value="{{$product->image}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Thông tin sản phẩm</label>
            <textarea class="description form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$product->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Điểm đánh giá sản phẩm</label>
            <input type="number" class="rate form-control" name="rate" id="exampleFormControlInput1" value="{{$product->rate}}">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" style="margin-left: 45%; margin-top: 30px;">Cập nhật</button>
        </div>
        <div class="col-auto">
            <a href="{{ route('product-delete', ['id' => $product -> id]) }}" type="submit" class="btn btn-primary mb-3" style="margin-left: 45%; margin-top: 30px;">Xoá</a>
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