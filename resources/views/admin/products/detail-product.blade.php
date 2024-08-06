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
    
        <table border="1">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>price</th>
                        <th>image</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            
                            <td>{{ $product->name}}</td>
                            <td>{{ $product->price}}</td>
                            <td><img src="{{ asset($product->image)}}" alt="" width="50px"></td>
                            
                        </tr>
                        
        
                </tbody>
            </table>

</div>
@endsection
@push('scripts')
<script></script>
@endpush