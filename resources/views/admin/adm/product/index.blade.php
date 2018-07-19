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

                        {{-- modal --}}
                        @foreach($products as $product)
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div  class="modal-content">
                                <h2>Thông tin sản phẩm</h2>
                                <div>
                                    
                                    <label for="">Name:</label>
                                    <span>{{$product->name}}</span>
                                    
                                    
                                    
                                </div>
                                <div>
                                    <label for="">Original price:</label>
                                    <span>{{$product->original_price}}</span>
                                </div>
                                <div>
                                    <label for="">Description:</label>
                                    <span>{{$product->description}}</span>
                                </div>
                                <div>
                                    <label for="">Content:</label>
                                    <span>{!!$product->content!!}</span>
                                </div>

                            </div>
                          </div>
                        </div>
                        @endforeach
            <!-- /.widget-list -->
@stop

@section('footer')

    <script>
        var productTable=null
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });


          $(function(){
            productTable = $('#product-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('listproduct') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'original_price', name: 'original_price' },
                    { data: 'description', name: 'description' },
                    { data: 'content', name: 'content' },
                    { data: '#', name: '#' },
                  ]
            });
        });
    $(document).ready(function(){
    $('#product-table').on('click', ".btn-delete", function(){
       swal({
          title: "Bạn có chắc chắn xóa",
          text: "Sẽ không thể khôi phục lại nếu xóa",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            console.log(url);
            var url = $(this).attr("data-url");
            console.log(url);
            $.ajax({
                    method:'DELETE',
                    url: url,
                    success: function(data){

                       productTable.ajax.reload();
                    }
            })
            swal("Đã xóa", {
              icon: "success",
            });
          } else {
            swal("Đã hủy xóa");
          }
        });
    })

});


    // $(document).ready(function(){
    //     $('#product-table').on('click',".btn-info",function(){
    //         alert('aaaa');
    //     });
    // });
        
    </script>

@stop