<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.updatePostProduct')}}" method='post'>
        @csrf
        <input type="hidden" name="idUser" value="{{$user->id}}">
        Ten: <input type="text" name="name" id="" value="{{$user->name}}"><br>
        email: <input type="text" name="email" id="" value="{{$user->email}}"><br>
        Phong ban:
        <select name="phongban" id="">
            @foreach ($phongBan as $value)
    <option @if ($user->phongban_id === $value->id )
        selected
    @endif
    value="{{$value->id}}">{{$value->ten_donvi}}</option>
    @endforeach
        </select> <br>
        tuoi: <input type="text" name="tuoi" id="" value="{{$user->tuoi}}"><br>
        so ngay nghi: <input type="text" name="songaynghi" id="" value="{{$user->songaynghi}}"><br>
        <button type="submit">update</button>
    </form>
</body>
</html>