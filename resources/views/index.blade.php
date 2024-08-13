@extends('layouts.main')

@section('content')
    <div class="home-page">

        <div class="container">
            <div class="text-end mb-4">
                <a class="btn-main" href="{{ url('create-sale') }}">Add Sale <i class="fa-solid fa-circle-plus"></i></a>
            </div>
            <div class="sec-title">Sales Report</div>

            <div class="table-responsive">
                @if ($sales->count())
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Date</th>
                                <th scope="col">Sales Person</th>
                                {{-- <th scope="col">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($sales as $val)
                                <tr class="align-middle">
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $val->product_name }}</td>
                                    <td>{{ $val->sales_amount }}</td>
                                    <td>{{ $val->sales_date }}</td>
                                    <td>{{ $val->sales_person }}</td>
                                    {{-- <td>
                                      <div>
                                        <a href="{{ route('sale.edit', $val->id) }}" class="btn btn-primary btn-sm"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="{{ route('sale.delete', $val->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm ms-2"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </div>
                                    </td> --}}
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- Paginate -->
                    <div class="paginate-pro mt-5 text-center">
                        {{ $sales->links() }}
                    </div>
            </div>
        @else
            <div class="text-center">
                <img src="{{ asset('image/empty.svg') }}" alt="no-data-found" width="500">
            </div>
            @endif

        </div>
    </div>
@endsection
