@extends('layouts.main')

@section('content')
    <div class="home-page">
       
      <div class="container">

        <div class="sec-title">Edit Sales</div>

        <div>
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <form action="{{ route('sale.update',$sale->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">
              <div class="col-lg-6 mb-5">
                  <div class="form-outline" data-mdb-input-init>
                      <input type="text" class="form-control form-control-lg" name="product_name" value="{{$sale->product_name}}"/>
                      <label class="form-label">Product Name</label>
                  </div>
              </div>
              <div class="col-lg-6 mb-5">
                  <div class="form-outline" data-mdb-input-init>
                      <input type="text" class="form-control form-control-lg" name="sales_amount"  value="{{$sale->sales_amount}}"/>
                      <label class="form-label">Sales Amount</label>
                  </div>
              </div>

              <div class="col-lg-6 mb-5">
                  <div class="form-outline" data-mdb-input-init>
                      <input type="date" class="form-control form-control-lg" name="sales_date"  value="{{$sale->sales_date}}"/>
                      <label class="form-label">Date</label>
                  </div>
              </div>
              <div class="col-lg-6 mb-5">
                  <div class="form-outline" data-mdb-input-init>
                      <input type="text" class="form-control form-control-lg" name="sales_person"  value="{{$sale->sales_person}}"/>
                      <label class="form-label">Sales Person</label>
                  </div>
              </div>
              <div class="col-12 text-center">
                  <button class="btn btn-main" type="submit">Update Now</button>
              </div>
          </div>
      </form>
        </div>
      </div>
    </div>
@endsection