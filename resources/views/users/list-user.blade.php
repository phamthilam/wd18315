<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('users.addUsers')}}">them moi</a>
    <table>
        <thead>
            <tr>
                <th>stt </th>
                <th>ten </th>
                <th>email </th>
                <th>phong ban</th>
                <th>Hanh dong</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listUsers as $key => $user)
            <tr>

                <td>{{$key + 1}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->ten_donvi}} </td>
                <td> <a href="{{ route('users.updateUser', $user->id)}}">sua</a>
                <a href="{{route('users.deleteUser', $user->id)}}">xóa</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>