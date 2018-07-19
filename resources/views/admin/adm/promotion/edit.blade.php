@extends('admin.adm.master')

@section('main')
                <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Promotion Table</h5>
                    
                    {{-- <p class="mr-0 text-muted hidden-sm-down">statistics, charts, events and reports</p> --}}
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Promotion Table</li>
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
                                <form action="{{route('manager.promotion.update',$promotion->id)}}" method="POST">
                                	@csrf()
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l1">Name</label>
                                        <div class="col-md-9">
                                            <input value="{{$promotion->name}}" name="name" class="form-control" id="l1" placeholder="Enter text" type="text"> 
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <div class="input-group input-has-value">
                                        <label class="col-md-3 col-form-label" for="l1">Date</label>
                                            <input value="{{$date}}" name="date" style="margin-left: 15px;" type="text" class="form-control datepicker" value="8/8/2018" data-plugin-options="{&quot;autoclose&quot;: true}"> <span class="input-group-addon"><i class="list-icon material-icons">date_range</i></span>
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