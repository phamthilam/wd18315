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
                    <h4 class="text-primary mb-4">Danh sách sản phẩm</h4>
                    <button class="btn btn-info" ><a href="{{route('admin.products.addProduct')}}">Thêm mới</a></button>
                    <h1>XIN CHÀO CÁC BẠN</h1>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>image</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($listProduct as $key=>$value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{ $value->name}}</td>
                                    <td>{{ $value->price}}</td>
                                    <td>{{ $value->image}}</td>
                                    <td>
                                        <button class="btn btn-warning">Sửa</button>
                                        <button class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                                 @endforeach
                
                        </tbody>
                    </table>
                </div>
                @endsection
                @push('scripts')
                <script></script>
@endpush