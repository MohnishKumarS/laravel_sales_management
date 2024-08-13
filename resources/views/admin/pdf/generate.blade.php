@extends('admin.layout.main')

@section('content')


    <div class="container">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Generate PDF -  All Sales  </h3>
            </div>
            <div class="box-body">
              <a href="{{route('admin.pdf.view')}}" class="btn btn-primary" target="_blank">View Sales</a>
              <a href="{{route('admin.pdf.download')}}"  class="btn btn-danger">Download Sales </a>
              
            </div>
        </div>

    </div>

@endsection
