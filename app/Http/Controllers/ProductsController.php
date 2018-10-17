<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use Input;
use Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        if(\Auth::user()->role==0)
        {
            return view('admin.products.index', compact('products'));
        }
        else 
        {
            return redirect()->back();
        }     
    }


    public function create()
    {   
        if(\Auth::user()->role==0)
        {
            return view('admin.products.create');
        }
        else 
        {
            return redirect()->back();
        }      
    }

   
       
   
    public function store(Request $request)
    {   
        $name = $request->input('name');
        $image = $request->input('image');
        $price =$request->input('price');
        $description = $request->input('description');

        // $image_resize = Image::make($image->getRealPath());
        // $image_resize->resize(200, 200);

        $uploaddir = 'uploads/';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
           
            DB::insert('insert into products (name, image, price, description) values(?, ?, ?, ?)',[$name, $uploadfile, $price, $description]);

            return redirect()->route('admin.products')->with( Session::flash('success', 'Product Created Successfully'));        
        }
        else {
            echo "Something is wrong";
        }
    }

    public function edit($id)
    {
        $products = DB::table('products')->where('id', $id)->first();

        if(\Auth::user()->role==0)
        {
              return view('admin.products.edit', ['products'=> $products]);
        }
        else 
        {
            return redirect()->back();
        }      
      
    }

    public function update(Request $request, $id)
    {
            $name = $request->input('name');
            $price =$request->input('price');
            $description = $request->input('description');

            DB::update('update products set name = ?, price = ?, description = ? where id = ?',[$name,$price,$description,$id]);
        return redirect()->route('admin.products')->with( Session::flash('success', 'Product Updated Successfully'));
    }

    public function delete($id)
    {
        $product = Product::findOrfail($id);

        $product->delete();


        return redirect()->route('admin.products')->with(Session::flash('success', 'Product Deleted Successfully'));
    }
}
