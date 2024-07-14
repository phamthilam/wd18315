<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.updatePostProduct')}}" method="post">
        @csrf
       <input type="hidden" name="idPro" value="{{$pro->id}}"> 
          name:<input type="text" name="name" id="" value="{{$pro->name}}"><br>
        view: <input type="number" name="view" id="" value="{{$pro->view}}"><br>
        price: <input type="number" name="price" id=""  value="{{$pro->price}}"> <br>
        <select name="category" id="">
            @foreach($cate as $loai)
            <option @if ($pro->category_id === $loai->id )
        selected
    @endif
             value="{{$loai->id}}">{{$loai->name}}</option>
            @endforeach
        </select> <br>
        <button type="submit">update</button>
    </form>
</body>
</html>