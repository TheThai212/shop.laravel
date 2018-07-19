<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductGallary;
use Yajra\Datatables\Datatables;

class ProductGallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productGallarys = ProductGallary::all();
        // dd($productGallarys);
        return view('admin.adm.productGallary.index',compact('productGallarys'));

        // $products = Product::orderBy('id', 'DESC')->get();
        // return view('admin.adm.product.index',compact('products'));
    }
    public function getList(){
       $productGallarys = ProductGallary::orderBy('id', 'DESC')->get();
       // dd($products);
        return Datatables::of($productGallarys)
        ->addColumn('#', function($productGallary){
            return '<div class="btn-group">

                        <button  data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-info btn-flat" userId="'.$productGallary->id.'"><i class="fa fa-eye"></i></button>

                        <a href="'.route('manager.productGallary.edit', $productGallary->id).'"><button class="btn btn-warning btn-flat" userId="'.$productGallary->id.'"><i class="fa fa-edit"></i> </button></a>

                        <button data-url="'.route('productGallary.destroy', $productGallary->id).'" userId="'.$productGallary->id.'" class="btn btn-danger btn-flat btn-delete"><i class="fa fa-trash-o"></i></button>


                      </div>';
        })
        ->rawColumns(['#'])
        ->make(true);// 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adm.productGallary.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

                'link'=>'required',
                'product_id'=>'required',
        ],[]);


        $productGallary = new ProductGallary;
        $productGallary->link = $request->link;
        $productGallary->product_id = $request->product_id;

        $productGallary->save();

        return redirect('admin/manager/product-gallary')->with('noti','thêm thành công');
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
    public function edit($id)
    {
        $productGallary = ProductGallary::find($id);
        return view('admin.adm.productGallary.edit',compact('productGallary'));
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

                'link'=>'required',
                'product_id'=>'required',

        ],[]);


        $productGallary = ProductGallary::find($id);
        $productGallary->link = $request->link;
        $productGallary->product_id = $request->product_id;

        $productGallary->update();

        return redirect('admin/manager/product-gallary')->with('noti','sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productGallary = ProductGallary::find($id);
        $productGallary->delete();

        return response()->json([
            'noti' => 'deleted'
        ],200);
    }
}
