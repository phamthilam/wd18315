@extends('admin.layouts.default')

@section('title')
       @parent 
       danh sach san pham
        @show

@push('styles')
<style></style>
@endpush
@section('content')
<div class="p-4" style="min-height: 800px;">
    @if (session('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{session('message')}}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        
    @endif
                    <h4 class="text-primary mb-4">Danh sách sản phẩm</h4>
                    <button class="btn btn-info" ><a href="{{route('admin.products.addProduct')}}">Thêm mới</a></button>
                    <h1>XIN CHÀO CÁC BẠN</h1>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>price</th>
                                <th>image</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($listProduct as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{ $value->name}}</td>
                                    <td>{{ $value->price}}</td>
                                    <td><img src="{{ asset($value->image)}}" alt="" width="50px"></td>
                                    <td>
                                        <a href="{{route('admin.products.detailProduct',$value->id)}}">Chi tiết</a>
                                        <a href="{{route('admin.products.updateProduct',$value->id)}}"><button class="btn btn-warning">Sửa</button></a>
                                        <a href="{{route('admin.products.deleteProduct', $value->id)}}"><button class="btn btn-danger" onclick="return confirm('bạn có muốn xóa ko')">Xóa</button></a>
                                </td>
                                </tr>
                                 @endforeach
                
                        </tbody>
                    </table>
                    {{$listProduct->links('pagination::bootstrap-5')}}
                </div>
                @endsection
                @push('scripts')
                <script></script>
@endpush