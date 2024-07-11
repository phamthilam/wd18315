<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('users.addPostUsers')}}" method='post'>
        @csrf
        Ten: <input type="text" name="name" id=""><br>
        email: <input type="text" name="email" id=""><br>
        Phong ban:
        <select name="phongban" id="">
            @foreach ($phongBan as $value)
    <option value="{{$value->id}}">{{$value->ten_donvi}}</option>
    @endforeach
        </select> <br>
        tuoi: <input type="text" name="tuoi" id=""><br>
        so ngay nghi: <input type="text" name="songaynghi" id=""><br>
        <button type="submit">Them moi</button>
    </form>
</body>
</html>