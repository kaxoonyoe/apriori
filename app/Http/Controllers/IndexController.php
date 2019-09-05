<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('web.index',compact('products'));
    }
    public function productDetail($id){
        $product = Product::find($id);
        $sProducts = Product::all()->random(3);
        return view('web.productDetail',compact('product','sProducts'));
    }
    public function confidence($sup_a, $sup_ab)
    {
        return round(($sup_ab / $sup_a) * 100, 2);
    }

    public function charm(){
        $items = ['cloth','pant','bottle','powder'];
        $transiion = ['cloth','pant'];
        $result  = array();
        $num     = count($items);
        $members = pow(2, $num);
        for($i=0; $i<$members; $i++)
        {
            $b   = sprintf("%0".$num."b", $i);
            $tmp = array();
            $res = array();
            for($j=0; $j<$num; $j++)
            {
                if($b[$j]=='1')
                {
                        $tmp[] = $items[$j];
                }
            }
            if($tmp == $transiion){
                $res = $tmp;
            }

            if($res)
            {
                sort($res);
                $result[] = $res;
            }

        }
        return $result;
    }


}
