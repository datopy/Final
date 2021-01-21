<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Comments;

class MainController extends Controller
{
    
	public function gindex()
	{
        return view("guest.gindex", ['products'=>Products::get()]);
	}
 

    public function comment(Request $request)
    {
    	Comments::create([
    		"product_id"=>$request->input("product_id"),
    		"comment"=>$request->input("comment")
    	]);
    	return redirect()->back();
    }

    public function gshow($id)
    {
    	$data=Products::where("id",$id)->firstOrFail();
    	$comments=Comments::where("product_id",$id)->get();
        return view("guest.gview", ["product"=>$data, "comments"=>$comments]);
    }
}
