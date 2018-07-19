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
       $products = Product::orderBy('id', 'DESC')->get();
       // dd($products);
        return Datatables::of($products)
        ->addColumn('#', function($product){
            return '<div class="btn-group">

            <center>
    
                <button  data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-info btn-flat" userId="'.$product->id.'"><i class="fa fa-eye"></i></button>

                <a href="'.route('manager.product.edit', $product->id).'"><button class="btn btn-warning btn-flat" userId="'.$product->id.'"><i class="fa fa-edit"></i> </button></a>

                <button data-url="'.route('product.destroy', $product->id).'" userId="'.$product->id.'" class="btn btn-danger btn-flat btn-delete"><i class="fa fa-trash-o"></i></button>


            </center>

                        

                      </div>';
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
                'original_price'=>'required|numeric',
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
        $product = Product::find($id);
        $product->delete();

        return response()->json([
            'noti' => 'deleted'
        ],200);
    }
}
