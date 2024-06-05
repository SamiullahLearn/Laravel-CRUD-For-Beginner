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
        <br>
     
        <div class="mx-auto max-w-screen-md mt-20 border border-black ">
    <form action="{{URL::to('/updateSingleproduct')}}" method="post" class="bg-pink-400 space-y-2 ">
@csrf


    

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="" value="{{$RecordUpdate->name}}">
    </div>
    <div>
        <label for="quantity">quantity:</label>
        <input type="number" name="quantity" id="" value="{{$RecordUpdate->quantity}}">
    </div> <div>
        <label for="price">price:</label>
        <input type="text" name="price" id="" value="{{$RecordUpdate->price}}">
    </div>
    <div>  <input type="hidden" name="id" value="{{ $RecordUpdate->id }}"></div>
    <!-- send that id to controller you want to update -->

    <div>

    <button>Update</button>
    </div>
    </form>
    </div>
    </div>
</body>
</html>