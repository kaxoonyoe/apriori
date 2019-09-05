<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
//    public function addProducts(Request $r){
//        $p = new Product();
//        $p->name = $r->name;
//        $p->price = $r->price;
//        $p->save();
//        return back();
//    }
    public function getImage($name){
        return response()->file(public_path()."/photos/test/".$name);
    }
    public function productListView(){
        $products = Product::all();
        return view('productList',compact('products'));
    }
    public function productList(Request $request){
        $photo = '';
        if($request->hasFile('photo')){
            $destinationPath = public_path()."/photos/test/";
            $file = $request->photo;
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(111,999).".".$extension;
            $file->move($destinationPath,$fileName);
            $photo = $fileName;
        }
        $p = new Product();
        $p->name = $request->name;
        $p->price = $request->price;
        $p->photo = $photo;
        $p->save();
        return redirect('web.productDetail');
    }
}
