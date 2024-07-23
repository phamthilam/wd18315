@extends('admin.layouts.default')
@section('title')
@parent
them moi san pham
@endsection
@push('styles')
    
@endpush
@section('content')
<div class="p-4" style="min-height: 800px;">
<form action="{{route('admin.products.addPostProduct')}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="mb-3">
        <label for="">ten san pham</label>
        <input type="text" name="nameSP"  class="form-control">

    </div>
    <div class="mb-3">
        <label for="">gia san pham</label>
        <input type="text" name="priceSP"  class="form-control">

    </div>
    <div class="mb-3">
        <label for="">anh san pham</label>
        <input type="file" name="name"  accept="image/*" class="form-control">

    </div>
    <button type="submit" class="btn btn-success">them moi</button>
</form>
</div>
@endsection

@push('scripts')
    
@endpush