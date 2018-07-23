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
                            <div class="widget-body">
                                {{-- <h5 class="box-title">Basic Table</h5> --}}
                                    <a href="{{route('manager.customer.add')}}" class="btn btn-primary ripple" d><i class="material-icons list-icon fs-24">playlist_add</i> Create New</a>
                                {{-- <p>Use basic bootstrap classes <code>.table</code> to any <code>&lt;table&gt;</code> --}}
                                </p>
                                <table id="order-table" class="cut-off">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th><center>#</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
       
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-body -->

                        </div>
                        {{-- modal --}}

                        @foreach($customers as $product)
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div  class="modal-content">
                                <h2>Thông tin sản phẩm</h2>
                                
                                <div>
                                    <label for="">Name</label>
                                    <span>{{$product->customer_name}}</span>
                                </div>
                                <div>
                                    <label for="">Address</label>
                                    <span>{{$product->customer_address}}</span>
                                </div>
                                <div>
                                    <label for="">Phone</label>
                                    <span>{{$product->customer_phone}}</span>
                                </div>
                                {{-- <div>
                                    <label for="">Product id:</label>
                                    <span>{{$product->product_id}}</span>
                                </div> --}}
                                

                            </div>
                          </div>
                        </div>
                        @endforeach
            <!-- /.widget-list -->
@stop

@section('footer')

    <script>
    	var orderTable=null;
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });


        $(function(){
            orderTable = $('#order-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('listcustomer') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'customer_name', name: 'customer_name' },
                    { data: 'customer_address', name: 'customer_address' },
                    { data: 'customer_phone', name: 'customer_phone' },
                    { data: '#', name: '#' },
                  ]
            });
        });

    $(document).ready(function(){
    $('#order-table').on('click', ".btn-delete", function(){
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

                       orderTable.ajax.reload();//test ddi
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

    </script>

@stop
