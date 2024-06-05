<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>showproducts</title>
    @vite('resources/css/app.css')
</head>
<body>
@if (session('done'))
    <h1>{{session('done')}}</h1>
@endif
    <table class="table-fixed ">
    <tbody>
        
    <thead class="bg-black text-white">
    <tr>

    <th>Name</th>
    <th>quantity</th>
    <th>Price</th>
    <th>delete</th>
    <th>Update</th>
    </tr>


    </thead>
  <!-- data variable come here now it has table rows from Db to show each row use foreach loop -->
    @foreach ($data as $singleData)
    <tr>
<!-- $singleData has now single row form DB -->
        <td>
            <!-- each row have column values so to access values give column name as we have name ,quantity,price-->
        {{$singleData->name}}

        </td>
        <td>
        {{$singleData->quantity}}

        </td> <td>
        {{$singleData->price}}

        </td>
<!-- now we put button here inorder to delete record from  table every  row has this a tag-->
    <td>
<!-- now here as we know we have table and it have alot of records so we must tell which record we want to delete so we tell by is as we press the button this url as we decleard a route will hit  -->
    <a href="{{URL::to('deleteproducts/'.$singleData->id)}}">DELETE</a>
    </td>
    <!-- .$singleData->id   this is what : we send id of that record we want to delete to our route and route will give this to controller  -->



<!--  now update we want to update record from table -->
<!--  every  row has crossponding record update link same as delete link-->
<td>

<!-- first show user his /her old data -->
<a href="{{URL::to('showOldproducts/'.$singleData->id)}}">Update</a>
</td>
    </tr>
    @endforeach



    </tbody>


    </table>
</body>
</html>