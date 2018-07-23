<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Yajra\Datatables\Datatables;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('id', 'DESC')->get();
        return view('admin.adm.customer.index',compact('orders'));
    }
    public function getList(){
       $customers = Customer::orderBy('id', 'DESC')->get();
       // dd($customers);
        return Datatables::of($customers)
        ->addColumn('#', function($customer){
            return '<div class="btn-group">

            <center>
    
                <button  data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-info btn-flat" userId="'.$customer->id.'"><i class="fa fa-eye"></i></button>

                <a href="'.route('manager.customer.edit', $customer->id).'" ><button class="btn btn-warning btn-flat" userId="'.$customer->id.'"><i class="fa fa-edit"></i> </button></a>

                <button data-url="'.route('customer.destroy', $customer->id).'" userId="'.$customer->id.'" class="btn btn-danger btn-flat btn-delete"><i class="fa fa-trash-o"></i></button>


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
        return view('admin.adm.customer.add');

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

                'customer_name'=>'required',
                'customer_address'=>'required',
                'customer_phone'=>'required',
        ],[]);


        $customer = new Customer;
        $customer->customer_name = $request->customer_name;
        $customer->customer_address = $request->customer_address;
        $customer->customer_phone = $request->customer_phone;
        $customer->save();

        return redirect('admin/manager/customer')->with('noti','thêm thành công');
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
         $customer = Customer::find($id);
        return view('admin.adm.customer.edit',compact('customer'));
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

                'customer_name'=>'required',
                'customer_address'=>'required',
                'customer_phone'=>'required',
        ],[]);

        $customer = Customer::find($id);
       $customer->customer_name = $request->customer_name;
        $customer->customer_address = $request->customer_address;
        $customer->customer_phone = $request->customer_phone;
        $customer->update();

        return redirect('admin/manager/customer')->with('noti','sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return response()->json([
            'noti' => 'deleted'
        ],200);
    }
}
