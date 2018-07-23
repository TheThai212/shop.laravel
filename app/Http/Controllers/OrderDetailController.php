<?php

namespace App\Http\Controllers;
use App\OrderDetail;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderDetails = OrderDetail::orderBy('id', 'DESC')->get();
        return view('admin.adm.orderdetail.index',compact('orderDetails'));
    }
    public function getList(){
       $orderDetails = OrderDetail::orderBy('id', 'DESC')->get();
       // dd($orderDetails);
        return Datatables::of($orderDetails)
        ->addColumn('#', function($orderdetail){
            return '<div class="btn-group">

            <center>
    
                <button  data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-info btn-flat" userId="'.$orderdetail->id.'"><i class="fa fa-eye"></i></button>

                <a href="'.route('manager.orderdetail.edit', $orderdetail->id).'" ><button class="btn btn-warning btn-flat" userId="'.$orderdetail->id.'"><i class="fa fa-edit"></i> </button></a>

                <button data-url="'.route('orderdetail.destroy', $orderdetail->id).'" userId="'.$orderdetail->id.'" class="btn btn-danger btn-flat btn-delete"><i class="fa fa-trash-o"></i></button>


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
        return view('admin.adm.orderdetail.add');

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

                'order_id'=>'required',
                'product_detail_id'=>'required',
                'price'=>'required',
                'quantity'=>'required',
        ],[]);


        $orderdetail = new OrderDetail;
        $orderdetail->order_id = $request->order_id;
        $orderdetail->product_detail_id = $request->product_detail_id;
        $orderdetail->price = $request->price;
        $orderdetail->quantity = $request->quantity;
        $orderdetail->save();

        return redirect('admin/manager/orderdetail')->with('noti','thêm thành công');
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
         $orderdetail = OrderDetail::find($id);
        return view('admin.adm.orderdetail.edit',compact('orderdetail'));
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

                'order_id'=>'required',
                'product_detail_id'=>'required',
                'price'=>'required',
                'quantity'=>'required',
        ],[]);


        $orderdetail = OrderDetail::find($id);
        $orderdetail->order_id = $request->order_id;
        $orderdetail->product_detail_id = $request->product_detail_id;
        $orderdetail->price = $request->price;
        $orderdetail->quantity = $request->quantity;
        $orderdetail->update();

        return redirect('admin/manager/orderdetail')->with('noti','sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderdetail = OrderDetail::find($id);
        $orderdetail->delete();

        return response()->json([
            'noti' => 'deleted'
        ],200);
    }
}