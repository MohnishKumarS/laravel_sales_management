@extends('admin.layout.main')

@section('content')


    <div class="container">
      <div class="box">
        <div class="box-header">
            <h3 class="box-title">Average sales per product</h3>
            <div class="box-tools">
                <div class="input-group">
                    <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                    <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Average Sales</th>

                </tr>
                @php
                    $i=1;
                @endphp
                @forelse ($salesPerProduct as $val)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$val->product_name}}</td>
                  <td>₹ {{$val->average_sales}}</td>
              </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            No sales data found.
                        </td>
                    </tr>
                @endforelse
             

            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

    </div>

@endsection
