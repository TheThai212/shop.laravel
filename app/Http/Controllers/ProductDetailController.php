<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductDetail;
use Yajra\Datatables\Datatables;
class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        $productdetails = ProductDetail::orderBy('id', 'DESC')->get();

        return view('admin.adm.productdetail.index',compact('productdetails'));
    }
     public function getList(){
       $productdetails = ProductDetail::orderBy('id', 'DESC')->get();
       
        return Datatables::of($productdetails)
        ->addColumn('#', function($productdetail){
            return '<div class="btn-group">

            <center>
    
                <button  data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-info btn-flat" userId="'.$productdetail->id.'"><i class="fa fa-eye"></i></button>

                <a href="'.route('manager.productdetail.edit', $productdetail->id).'"><button class="btn btn-warning btn-flat" userId="'.$productdetail->id.'"><i class="fa fa-edit"></i> </button></a>

                <button data-url="'.route('productdetail.destroy', $productdetail->id).'" userId="'.$productdetail->id.'" class="btn btn-danger btn-flat btn-delete"><i class="fa fa-trash-o"></i></button>


            </center>

                        

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
        return view('admin.adm.productdetail.add');
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

                'product_id'=>'required',
                'size'=>'required',
                'color'=>'required',
                'quanity'=>'required',
        ],[]);

        
        $productdetail = new ProductDetail;
        $productdetail->product_id = $request->product_id;
        $productdetail->size = $request->size;
        $productdetail->color = $request->color;
        $productdetail->quanity = $request->quanity;

        $productdetail->save();

        return redirect('admin/manager/productdetail')->with('noti','thêm thành công');
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
        $productdetail = ProductDetail::find($id);
        return view('admin.adm.productdetail.edit',compact('productdetail'));
         
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

                'product_id'=>'required',
                'size'=>'required',
                'color'=>'required',
                'quanity'=>'required',
        ],[]);


        $productdetail = ProductDetail::find($id);
        $productdetail->product_id = $request->product_id;
        $productdetail->size = $request->size;
        $productdetail->color = $request->color;
        $productdetail->quanity = $request->quanity;

        $productdetail->update();

        return redirect('admin/manager/productdetail')->with('noti','sửa thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productdetail = ProductDetail::find($id);
        $productdetail->delete();

        return response()->json([
            'noti' => 'deleted'
        ],200);
    }
}
