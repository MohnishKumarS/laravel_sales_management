<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice #sales</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        label {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }

        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }

        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }

        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }

        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }

        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }

        .text-end {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }

        .no-border {
            border: 1px solid #fff !important;
        }

        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>

<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Sales Management</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Date: {{ date('d-M-Y') }}</span> <br>
                    <span>Address: 58, Madukarai main road, saidapet, Chennai,
                        Tamil Nadu, India</span> <br>
                    <span>Zip code : 641023</span> <br>
                </th>
            </tr>
        </thead>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="6">
                    Sales List
                </th>
            </tr>
            <tr class="bg-blue">
                <th>ID</th>
                <th>Product name</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Sales Person</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
                $total_amount = 0;
            @endphp
            @foreach ($sales as $val)
                <tr>

                    <td width="10%"> {{ $i++ }}</td>
                    <td width="30%">{{ $val->product_name }}</td>
                    <td width="20%">Rs.{{ $val->sales_amount }}</td>
                    <td width="20%" >{{ $val->sales_date }}</td>
                    <td width="20%" class="fw-bold">{{ $val->sales_person }}</td>
                </tr>
                @php
                    $total_amount += $val->sales_amount;
                @endphp
            @endforeach

            <tr>
                <td colspan="5" class="total-heading text-center">Total Amount - Rs {{$total_amount}} </td>
              
            </tr>
        </tbody>
    </table>

    <br>
    <p class="text-center">
        Thank your 
    </p>

</body>

</html>
