<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thông tin sinh vien</title>
</head>
<style>
    h1{
        color: red;
        text-align: center;
    }
    p {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 10px;
}
</style>
<body>
    <h1>Giới thiệu bản thân</h1>
  

            @foreach ($listSinhvien as $value)
             
               <p>Mã sinh viên: {{$value['id']}}</p>
                <p>Tên sinh viên: {{$value['name']}}</p>
                <p>Chuyên ngành: {{$value['majoring']}}</p>
                <p>Địa chỉ:{{$value['address']}}</p>
              
           @endforeach
        
</body>
</html>