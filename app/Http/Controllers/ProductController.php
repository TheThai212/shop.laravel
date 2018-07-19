<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Yajra\Datatables\Datatables;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        $products = Product::orderBy('id', 'DESC')->get();
        return view('admin.adm.product.index',compact('products'));
    }
     public function getList(){
       $products = Product::all();
       // dd($products);
        return Datatables::of($products)
        ->addColumn('#', function ($product) {
                return '<a href="#edit-'.$product->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
        })->editColumn('description', function($product){
            return '<p style="width:50%">'.$product->description.' </p>';
        })
        ->rawColumns(['#','description','content'])
        ->make(true);// 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adm.product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request,[

                'name'=>'required',
                'original_price'=>'required',
                'description'=>'required',
                'content'=>'required',
        ],[]);


        $product = new Product;
        $product->name = $request->name;
        $product->original_price = $request->original_price;
        $product->description = $request->description;
        $product->content = $request->content;
        $product->save();

        return redirect('admin/manager/product')->with('noti','thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $product = Product::find($id);
        return view('admin.adm.product.edit',compact('product'));
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

                'name'=>'required',
                'original_price'=>'required',
                'description'=>'required',
                'content'=>'required',
        ],[]);


        $product = Product::find($id);
        $product->name = $request->name;
        $product->original_price = $request->original_price;
        $product->description = $request->description;
        $product->content = $request->content;

        $product->update();

        return redirect('admin/manager/product')->with('noti','sửa thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
