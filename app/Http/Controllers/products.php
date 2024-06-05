<?php

namespace App\Http\Controllers;

use App\Models\products as ModelsProducts;
use Illuminate\Http\Request;

class products extends Controller
{
    //store
    public function store(Request $formdata){//Request $formdata this shows that data will come in the form of 'Form' so variable $formdata will hold it
        $row= new ModelsProducts;// dont confuse laravel did it our model is products  (plular name) our table name is products
        $row->name = $formdata->name;
        $row->quantity = $formdata->quantity;
        $row->price = $formdata->price;
        $row->save();//save inn DB
        return redirect()->back()->with('done',"done");//flash msg
       
    }
    public function show(){

        //here as we now whatever operation we want to performe on table we fisrt talk with model as every table has his model which represent DB table


        //now show data

        $data= ModelsProducts::all();//all is method which take all vlaues from crossponding table and $data var  has refernce of all values

        //now how to show in our UI/view as we have data we want to give that data to view so here how :

        return view('showproducts',compact('data'));//compact is like truck/vehicle that take data to view --------->  view('showproducts) 
        // showproducts  is our view name 
    }

    public function delete($id){

        $deleterecord= ModelsProducts::find($id);

        $deleterecord->delete();
        return redirect()->back()->with('done',"done");//flash msg
    }
    

    public function showOldproducts($id){

 $RecordUpdate= ModelsProducts::find($id);
 
 return view('updateRecord',compact('RecordUpdate'));

    }


    //here we update the product when form from update record will  submit it will come here  with new record enter bu user in form 
    public function updateSingleproduct (Request $formdata){

       
        $row=ModelsProducts::find($formdata->id);//as datta comes from form you get id of that data you want to update
        $row->name = $formdata->name;
        $row->quantity = $formdata->quantity;
        $row->price = $formdata->price;
        $row->save();//save inn DB
    }

    //we are done with crud hope it helps you:)
}
