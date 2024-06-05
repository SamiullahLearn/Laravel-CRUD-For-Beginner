<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    @vite('resources/css/app.css')
    
</head>
<body>

@if (session('done'))
    <h1>{{session('done')}}</h1>
@endif
    <div class="bg-gray-400 h-screen ">
        <!-- {{URL::to('/enterproduct')}}  this tell where to go after sumit button is pressed -->
        <br>
        <div class="mx-auto max-w-screen-md mt-20 border border-black ">
    <form action="{{URL::to('/productstore')}}" method="post" class="bg-pink-400 space-y-2 ">
@csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="">
    </div>
    <div>
        <label for="quantity">quantity:</label>
        <input type="number" name="quantity" id="">
    </div> <div>
        <label for="price">price:</label>
        <input type="text" name="price" id="">
    </div>

    <div>

    <button type="submit">sub</button>
    </div>
    </form>
    </div>
    
    <a href="{{url::to('/showproducts')}}">showproducts</a>
    </div>

</body>
</html>