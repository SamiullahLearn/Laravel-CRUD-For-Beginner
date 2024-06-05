<?php

use App\Http\Controllers\items;
use App\Http\Controllers\product;
use App\Http\Controllers\products;
use App\Models\products as ModelsProducts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('products');
});

//actually when we hit this route then then it will show us a fields where we enter product detalil ,you have  to show first where user enter thats why we do this
Route::get('/enterproduct',function (){

    return view('products');
});

Route::post('/productstore',[products::class,'store']//same as above but method is post as when sumit button is pressed form will come here

// products::class,'store']  this is controller "store" method in products controller   when form submits  then  it will go to contrller method as it tell what to do with form
);


//for  displaying data from table


Route::get('/showproducts',[products::class,'show']);//when this route will hit show method in products controller will calll 

// delete a record 




//id will come here (deleteproducts/'.$singleData->id)
               //                        |
   //                                    | 
   //                                    |
            Route::get('/deleteproducts/{id}',[products::class,'delete']);


//<a href="{{URL::to('deleteproducts/'.$singleData->id)}}">



/////////////////////update////////////////////////

//first show old data in form only that data which user want to update thats why we send id to contoller that data we want to update


Route::get('/showOldproducts/{id}',[products::class,'showOldproducts']);


//  now you show record now its time to update that single record
// updae the product 

Route::post('/updateSingleproduct',[products::class,'updateSingleproduct']);


//////////////////////////////////
