<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danh sach san pham</title>
</head>
<body>
    <h1>xin chao cac ban</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listProduct as $value)
               <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['name']}}</td>
               </tr>
           @endforeach
        </tbody>

    </table>
</body>
</html>