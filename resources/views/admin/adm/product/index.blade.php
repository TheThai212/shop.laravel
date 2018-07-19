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
                    <div class="d-inline-flex justify-center align-items-center hidden-sm-down"><a href="javascript: void(0);" class="btn btn-outline-primary mr-l-20 btn-sm btn-rounded hidden-xs hidden-sm ripple" target="_blank">Buy Now</a>
                    </div>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
<div class="widget-bg">
                            <div class="widget-body">
                                {{-- <h5 class="box-title">Basic Table</h5> --}}
                                    <a href="{{route('manager.product.add')}}" class="btn btn-primary ripple" d><i class="material-icons list-icon fs-24">playlist_add</i> Create New</a>
                                {{-- <p>Use basic bootstrap classes <code>.table</code> to any <code>&lt;table&gt;</code> --}}
                                </p>
                                <table id="product-table" class="cut-off">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Original Price</th>
                                            <th style="width: 70px;">Description</th>
                                            <th>Content</th>
                                            <th><center>#</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       {{--  @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>${{number_format($product->original_price)}}</td>
                                            <td>{!! Str::words($product->description, 5,'....')  !!}</td>
                                            <td>{!! Str::words($product->content, 5,'....')  !!}</td>
                                            <td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                           <div class="btn-group btn-group-sm" style="float: none;">


                                            <a href="{{route('manager.product.edit',$product->id)}}"><button type="button" class="tabledit-edit-button btn btn-md btn-default" style="float: none;"><i class="fa fa-pencil-square-o"></i></button></a>

                                            <a href=""><button type="button" class="tabledit-delete-button btn btn-md btn-default" style="float: none;"><i class="fa fa-trash-o"></i></button></a></div>
                                           </td>

                                        </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-body -->
                        </div>
            <!-- /.widget-list -->
@stop

@section('footer')
    <script>
        $(function(){
            $('#product-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('listproduct') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'original_price', name: 'original_price' },
                    { data: 'description', name: 'description' },
                    { data: 'content', name: 'content' },
                  ]
            });
        });
        
    </script>

@stop