@extends('admin.layout.main')

@section('content')


    <div class="container">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Update Sales</h3>
            </div>
            <div class="box-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.sales.update',$sale->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <div class="form-group">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control form-control-lg" name="product_name"
                                    value="{{$sale->product_name}}" />

                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="form-group">
                                <label class="form-label">Sales Amount</label>
                                <input type="text" class="form-control form-control-lg" name="sales_amount"
                                    value="{{$sale->sales_amount}}" />

                            </div>
                        </div>

                        <div class="col-lg-6 mb-5">
                            <div class="form-group">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control form-control-lg" name="sales_date"
                                    value="{{$sale->sales_date}}" />

                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="form-group">
                                <label class="form-label">Sales Person</label>
                                <input type="text" class="form-control form-control-lg" name="sales_person"
                                    value="{{$sale->sales_person}}" />

                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary" type="submit">Update Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
