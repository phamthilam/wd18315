<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        @if (session('message'))
            <p>{{session('message')}}</p>
        @endif
        <form action="{{route('postRegister')}}" method="POST">
        @csrf
        <div>
            name:
            <input type="text" name="name" class="form-control" id="">
        </div>
        <div>
            Email:
            <input type="text" name="email" class="form-control" id="">
        </div>
        <div>
            Password:
            <input type="text" name="password" class="form-control" id="">
        </div>
        <div>
            Confirm Password:
            <input type="text" name="confirmpassword" class="form-control" id="">
        </div>
        <button type="submit" class="btn btn-primary">dang ky</button>
    </form></div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>