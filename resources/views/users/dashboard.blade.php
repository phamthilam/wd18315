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
        <div class="search mb-3">
            <input type="text" class="form-control" placeholder="Search" id="search">
            <div class="result-search" id="result-search">

            </div>
        </div>
        </div>
        <div class="row">
            @foreach ($listproduct as $product)
                <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{asset('')}}" alt="">
                    <p>{{$product->name}}</p>
                    <p>{{$product->price}}</p>
                    <button>xem chi tiet</button>
                </div>    
                </div>                
            @endforeach
        </div>
    </div>
    <script>
       let search = document.querySelector("#search")
        function debounce(func, delay) {
            let timeoutId;
            return function(...args) {
                const context = this;
                clearTimeout(timeoutId);
                timeoutId = setTimeout(() => func.apply(context, args), delay);
            };
        }

        function callAPI(){
            let url = "{{ route('users.searchProduct') }}"
            fetch(url, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                method: 'POST',
                body: JSON.stringify({
                    'search' : search.value
                })
            })
                .then((response) => response.json())
                .then((response) => {
                    let resultUI = document.querySelector("#result-search")
                    let UI = ''
                    if(response.message == 'success' && response.data.length != 0){
                        response.data.forEach(item => {
                            UI += `
                                <a href="{{ route('users.detailProduct') }}?idProduct=${item.id}" class="item">
                                    ${item.name}
                                </a>
                            `
                        })
                    }
                    resultUI.innerHTML = UI
                })
        }

        search.addEventListener('keyup', debounce(() => {
            callAPI()
        }, 500))
    </script>
</body>
</html>