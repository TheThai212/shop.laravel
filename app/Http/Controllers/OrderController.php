<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Yajra\Datatables\Datatables;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->get();
        return view('admin.adm.order.index',compact('orders'));
    }
    public function getList(){
       $orders = Order::orderBy('id', 'DESC')->get();
       // dd($orders);
        return Datatables::of($orders)
        ->addColumn('#', function($order){
            return '<div class="btn-group">

            <center>
    
                <button  data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-info btn-flat" userId="'.$order->id.'"><i class="fa fa-eye"></i></button>

                <a ><button class="btn btn-warning btn-flat" userId="'.$order->id.'"><i class="fa fa-edit"></i> </button></a>

                <button data-url="'.route('order.destroy', $order->id).'" userId="'.$order->id.'" class="btn btn-danger btn-flat btn-delete"><i class="fa fa-trash-o"></i></button>


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
        return view('admin.adm.order.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();

        return response()->json([
            'noti' => 'deleted'
        ],200);
    }
}
