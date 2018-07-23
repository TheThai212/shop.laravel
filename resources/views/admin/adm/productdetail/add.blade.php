@extends('admin.adm.master')

@section('main')
                <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Product Detail Table</h5>
                    
                    {{-- <p class="mr-0 text-muted hidden-sm-down">statistics, charts, events and reports</p> --}}
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Product Detail Table</li>
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
                                <form action="{{route('manager.productdetail.add')}}" method="POST"  enctype="multipart/form-data">
                                	@csrf()

                                  

                                    <div class="form-group row">
                                      
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l1">Size</label>
                                        <div class="col-md-9">

                                            <select name="size" class="form-control" id="l13">
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-md-3 col-form-label" for="sampleColor">Color Input</label>
                                        <div class="col-md-9">
                                            <input  type="color"  name="color" value="#ff0000">
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </div>
                                   <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l1">Quanity</label>
                                        <div class="col-md-9">
                                            <input name="quanity" class="form-control" id="l1" placeholder="Enter text" type="text"> 
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