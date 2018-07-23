@extends('admin.adm.master')

@section('main')
                <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h5 class="mr-0 mr-r-5">Product Gallary Table</h5>
                    
                    {{-- <p class="mr-0 text-muted hidden-sm-down">statistics, charts, events and reports</p> --}}
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Product Gallary Table</li>
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
                                <form action="{{route('manager.productGallary.add')}}" method="POST"  enctype="multipart/form-data">
                                	@csrf()

                                    <div class="form-group">
                                        <label class="col-md-3 col-form-label" for="l1">Link</label>
                                          Select image to upload:
                                            {{-- <input  type="file"  id="fileToUpload"> --}}
                                            <input type='file' name="link" onchange="readURL(this);" />
                                            <img style="height: 20%;width: 20%" id="blah" src="http://placehold.it/180" alt="your image" />
                                      </div>
                                      <script>
                                               function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();

                                                    reader.onload = function (e) {
                                                        $('#blah')
                                                            .attr('src', e.target.result);
                                                    };

                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                      </script>

                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l1">Product id</label>
                                        <div class="col-md-9">

                                            <select name="product_id" class="form-control" id="l13">
                                                @foreach($products as $product)
                                                <option value="{{$product->id}}">{{$product->name}}</option>
                                                @endforeach()
                                            </select> 
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