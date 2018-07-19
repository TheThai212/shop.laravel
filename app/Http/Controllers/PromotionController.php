<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;
use Yajra\Datatables\Datatables;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::orderBy('id', 'DESC')->get();
        return view('admin.adm.promotion.index',compact('promotions'));
    }
    public function getList(){
       $promotions = Promotion::orderBy('id', 'DESC')->get();
       // dd($promotions);
        return Datatables::of($promotions)
        ->addColumn('#', function($promotion){
            return '<div class="btn-group">

            <center>
    
                <button  data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-info btn-flat" userId="'.$promotion->id.'"><i class="fa fa-eye"></i></button>

                <a href="'.route('manager.promotion.edit', $promotion->id).'" ><button class="btn btn-warning btn-flat" userId="'.$promotion->id.'"><i class="fa fa-edit"></i> </button></a>

                <button data-url="'.route('promotion.destroy', $promotion->id).'" userId="'.$promotion->id.'" class="btn btn-danger btn-flat btn-delete"><i class="fa fa-trash-o"></i></button>


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
        return view('admin.adm.promotion.add');
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

                'name'=>'required',
        ],[]);

        
         $str = explode('/', $request->date);
            $str2 = array();
            $str2[]= $str[2] ;  
            $str2[]= $str[0];   
            $str2[]= $str[1];   

            $date = implode('/', $str2);
        $promotion = new Promotion;
        $promotion->name = $request->name;
        $promotion->date = $date;

        $promotion->save();

        return redirect('admin/manager/promotion')->with('noti','thêm thành công');
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
         $promotion = Promotion::find($id);

         $str = explode('-', $promotion->date);
            $str2 = array();
            $str2[]= $str[1] ;  
            $str2[]= $str[2];   
            $str2[]= $str[0];   

            $date = implode('/', $str2);


        return view('admin.adm.promotion.edit',compact('promotion','date'));
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
        ],[]);

        
        
         $str = explode('/', $request->date);
            $str2 = array();
            $str2[]= $str[2] ;  
            $str2[]= $str[0];   
            $str2[]= $str[1];   

            $date = implode('/', $str2);

        $promotion =Promotion::find($id);
        $promotion->name = $request->name;
        $promotion->date = $date;

        $promotion->update();

        return redirect('admin/manager/promotion')->with('noti','sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $promotion = Promotion::find($id);
        $promotion->delete();

        return response()->json([
            'noti' => 'deleted'
        ],200);
    }
}
