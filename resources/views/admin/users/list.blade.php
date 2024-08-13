@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Users List</h3>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>


                    </tr>
                    @php
                        $i = 1;
                    @endphp
                    @forelse ($users as $val)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->email }}</td>
                            <td>{{ $val->role }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                No user data found.
                            </td>
                        </tr>
                    @endforelse


                </table>

            </div><!-- /.box-body -->
        </div><!-- /.box -->
        <!-- Paginate -->
        <div class="paginate-pro mt-5 text-center">
            {{ $users->links() }}
        </div>

    </div>
@endsection
