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
        <form action="{{route('postLogin')}}" method="POST">
        @csrf
        <div>
            Email:
            <input type="text" name="email" class="form-control" id="">
            @error('email')
            <p class="text-danger">{{$message}}</p>
                
            @enderror
        </div>
        <div>
            Password:
            <input type="text" name="password" class="form-control" id="">
            @error('password')
            <p class="text-danger">{{$message}}</p>
                
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">dang nhap</button>
    </form>
<a href="{{route('register')}}">Dang kys tai khoan</a>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>