@extends('admin.layouts.default')
@section('title')
@parent
sua san pham
@endsection
@push('styles')
    
@endpush
@section('content')
<div class="p-4" style="min-height: 800px;">
<form action="{{route('admin.products.updatePatchProduct',$product->id)}}" method="POST" enctype="multipart/form-data">

@method('patch')
@csrf
    <div class="mb-3">
        <label for="">ten san pham</label>
        <input type="text" name="nameSP"  class="form-control" value="{{$product->name}}">

    </div>
    <div class="mb-3">
        <label for="">gia san pham</label>
     
        <input type="text" name="priceSP"  class="form-control"  value="{{$product->price}} ">

    </div>
    <div class="mb-3">
        <label for="">anh san pham</label>  <br> 
        <img src="{{asset($product->image)}}" width="50px"  alt="">
        <input type="file" name="imageSP"  accept="image/*" class="form-control">

    </div>
    <button type="submit" class="btn btn-success">them moi</button>
</form>
</div>
@endsection

@push('scripts')
    
@endpush