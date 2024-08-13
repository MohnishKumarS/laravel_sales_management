@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Sales List</h3>
                <div class="box-tools">
                    <div class="input-group">
                        <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;"
                            placeholder="Search" />
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
                        <th>Sales Amount</th>
                        <th>Date</th>
                        <th>Sales Person</th>
                        <th>Action</th>

                    </tr>
                    @php
                        $i = 1;
                    @endphp
                    @forelse ($sales as $val)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $val->product_name }}</td>
                            <td>₹ {{ $val->sales_amount }}</td>
                            <td>₹ {{ $val->sales_date }}</td>
                            <td>₹ {{ $val->sales_person }}</td>
                            <td>
                                <a href="{{ route('admin.sales.edit', $val->id) }}" class="btn btn-xs btn-info">Edit</a>
                                <form action="{{ route('admin.sales.delete', $val->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                </form>


                            </td>
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
        <!-- Paginate -->
        <div class="paginate-pro mt-5 text-center">
            {{ $sales->links() }}
        </div>

    </div>
@endsection
