<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""></form>
    <a href="{{ route('product.addProduct')}}">them</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>view</th>
                <th>category</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listPro as $pro)
            <tr>
                <td>{{$pro->id}}</td>
                <td>{{$pro->name}}</td>
                <td>{{$pro->price}}</td>
                <td>{{$pro->view}}</td>
                <td>{{$pro->namecate}}</td>
            <td><a  href="{{ route('product.deleteProduct',$pro->id)}}">Xoa</a>
            <a href="{{ route('product.updateProduct',$pro->id)}}">sua</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>