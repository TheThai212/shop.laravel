@extends('admin.adm.master')

@section('main')
                <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Product Table</h5>
                    
                    {{-- <p class="mr-0 text-muted hidden-sm-down">statistics, charts, events and reports</p> --}}
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Editable Table</li>
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
                                <h5 class="box-title mr-b-0">Edit product</h5>
                                <p class="text-muted"></p>
                                <form action="{{route('manager.product.update',$product->id)}}" method="POST">
                                	@csrf()
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l1">Product Name</label>
                                        <div class="col-md-9">
                                            <input value="{{$product->name}}" name="name" class="form-control" id="l1" placeholder="Enter text" type="text"> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l1">Origina Price</label>
                                        <div class="col-md-9">
                                            <input value="{{$product->original_price}}" name="original_price" type="text" id="sampleCurrency" name="sampleCurrency" class="form-control mb-0" data-masked-input="$ 999,999,999.99" placeholder="$ 999,999,999.99" maxlength="19"> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l15">Description</label>
                                        <div class="col-md-9">
                                            <textarea  name="description" class="form-control" id="l15" rows="3">{{$product->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l15">Content</label>
                                        <div class="col-md-9">
                                            <textarea value="{{$product->content}}" name="content" class="form-control"  rows="5">{{$product->content}}</textarea>
											<script>
											    CKEDITOR.replace( 'content' );
											</script>
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
