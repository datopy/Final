<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Products;
use App\Comments;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.index", ['products'=>Products::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view("admin.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Input::file("image")){
            $dest=public_path("photos");
            $filename=uniqid().".jpg";
            $img=Input::file("image")->move($dest, $filename);
        }

        Products::create([
            "title"=>$request->input("title"),
            "price"=>$request->input("price"),
            "category_name"=>$request->input("category_name"),
            "category_id"=>$request->input("category_id"),
            "description"=>$request->input("description"),
            "image"=>$filename,
        ]);
        return redirect()->route("index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Products::where("id",$id)->firstOrFail();
        $comments=Comments::where("product_id",$id)->get();
        return view("admin.single", ["product"=>$data, "comments"=>$comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Products::where("id",$id)->firstOrFail();
        return view("admin.edit", ["product"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
         
        Products::where("id", $request->input("id"))->update([
            "title"=>$request->input("title"),
            "price"=>$request->input("price"),
            "category_name"=>$request->input("category_name"),
            "category_id"=>$request->input("category_id"),
            "description"=>$request->input("description"),
            "image"=>$request->input("image")
        ]);
        return redirect()->route("index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        Products::where("id",$request->input("id"))->delete();
        return redirect()->back();
    }
}
