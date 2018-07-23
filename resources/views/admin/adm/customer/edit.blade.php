@extends('admin.adm.master')

@section('main')
                <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Customer Table</h5>
                    
                    {{-- <p class="mr-0 text-muted hidden-sm-down">statistics, charts, events and reports</p> --}}
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Customer Table</li>
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
                                <form action="{{route('manager.customer.update',$customer->id)}}" method="POST">
                                	@csrf()
                                    
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l1">Name</label>
                                        <div class="col-md-9">
                                            <input value="{{$customer->customer_name}}" name="customer_name" class="form-control" id="l1" placeholder="Enter text" type="text"> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l1">Address</label>
                                        <div class="col-md-9">
                                            <input value="{{$customer->customer_address}}" name="customer_address" class="form-control" id="l1" placeholder="Enter text" type="text"> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l1">Phone</label>
                                        <div class="col-md-9">
                                            <input value="{{$customer->customer_phone}}" name="customer_phone" type="text" id="samplePhone" name="samplePhone" class="form-control mb-0" data-masked-input="999-999-9999" placeholder="XXX-XXX-XXXX" maxlength="12">
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