@extends('admin.adm.master')

@section('main')
                <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Order Detail Table</h5>
                    
                    {{-- <p class="mr-0 text-muted hidden-sm-down">statistics, charts, events and reports</p> --}}
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Order Detail Table</li>
                    </ol>
                    
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
<div class="widget-bg">
                            
                            <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Create new </h5>
                                <p class="text-muted"></p>
                                <form action="{{route('manager.orderdetail.update',$orderdetail->id)}}" method="POST">
                                    @csrf()
                                    
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l1">Order Id</label>
                                        <div class="col-md-9">

                                            <select name="order_id" class="form-control" id="l13">
                                                @foreach($orders_table as $product)
                                                <option value="{{$product->id}}" >{{$product->id}}</option>
                                                @endforeach()
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l1">Product Detail Id</label>
                                        <div class="col-md-9">

                                            <select name="product_detail_id" class="form-control" id="l13">
                                                @foreach($orders_table as $product)
                                                <option value="{{$product->id}}">{{$product->id}}</option>
                                                @endforeach()
                                            </select> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l1">Price</label>
                                        <div class="col-md-9">
                                            <input value="{{$orderdetail->price}}" name="price" class="form-control" id="l1" placeholder="Enter text" type="text"> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l1">Quantity</label>
                                        <div class="col-md-9">
                                            <input value="{{$orderdetail->quantity}}" name="quantity" class="form-control" id="l1" placeholder="Enter text" type="text"> 
                                        </div>
                                    </div>                                   
                                    <div class="form-actions">
                                        <div class="form-group row">
                                            <div class="col-md-9 ml-md-auto btn-list">
                                                <button class="btn btn-primary btn-rounded" type="submit">Submit</button>
                                                <button class="btn btn-outline-default btn-rounded" type="reset">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        </div>
            <!-- /.widget-list -->
@stop