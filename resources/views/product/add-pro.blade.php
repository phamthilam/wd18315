<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.addPostProduct')}}" method="post">
        @csrf
        name: <input type="text" name="name" id=""> <br>
        view: <input type="number" name="view" id=""> <br>
        price: <input type="number" name="price" id=""> <br>
        <select name="category" id="">
            @foreach($cate as $loai)
            <option value="{{$loai->id}}">{{$loai->name}}</option>
            @endforeach
        </select>
        <button type="submit">them</button>
    </form>
</body>
</html>