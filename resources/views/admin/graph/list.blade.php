@extends('admin.layout.main')

@section('content')


    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Overall Sales Amount   </h3>
            </div>
            <div class="box-body">
              <div>
                <canvas id="myChart_salesAmount"></canvas>
              </div>
            </div>
        </div>
        </div>
        <div class="col-lg-6">
          <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Total sales per salesperson  </h3>
            </div>
            <div class="box-body">
              <div>
                <canvas id="myChart_salesPerson"></canvas>
              </div>
            </div>
        </div>
        </div>
      </div>
   

    </div>

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      // chart js
      
      // const salesAmountData = @json($salesData);
      const salesAmountData =  JSON.parse('{!! json_encode($salesData) !!}');
      const salesPersonData =  JSON.parse('{!! json_encode($salesPerson) !!}');
      const getMonth = salesAmountData.map(item => item.month);
      const getMonthAmount = salesAmountData.map(item => item.total_sales);
      const salesPerson = salesPersonData.map(item => item.sales_person);
      const salesPersonAmount = salesPersonData.map(item => item.total_sales);
      console.log(salesPerson);
      



        const chart_salesAmount = document.getElementById('myChart_salesAmount');
        const chart_salesPerson = document.getElementById('myChart_salesPerson');

        // sales amount
        new Chart(chart_salesAmount, {
        type: "line",
        data: {
          labels: getMonth,
          datasets: [{
            label: "Total Sales Amount",
            data: getMonthAmount,
            borderWidth: 1,
            backgroundColor: [
              "rgb(66,211,245)",
              "red",
              "green",
              "blue",
              "yellow",
              "black",
              "orange",
              "purple",
              "pink",
              "brown",
            ],
          }, ],
        },
        options: {
          plugins: {
            animations: {
              tension: {
                duration: 1000,
                easing: "linear",
                from: 1,
                to: 0,
                loop: true,
              },
            },
            scales: {
              y: {
                // defining min and max so hiding the dataset does not change scale range
                min: 0,
                max: 100,
              },
            },
            customCanvasBackgroundColor: {
              color: 'lightGreen',
            },
            legend: {
              display: true,
            },
            title: {
              display: true,
              text: "Past 6 months",
            },
          },
          scales: {
            y: {
              beginAtZero: 0,
            },
          },
        },

      });


      // sales Person
      new Chart(chart_salesPerson, {
        type: "bar",
        data: {
          labels: salesPerson,
          datasets: [{
            label: "Total sale",
            data: salesPersonAmount,
            borderWidth: 1,
            backgroundColor: [
              "rgb(66,211,245)",
              "red",
              "green",
              "blue",
              "yellow",
              "black",
              'orange',
              "purple",
              "pink",
              "brown",
            ],
          }, ],
        },
        options: {
          plugins: {
            animations: {
              tension: {
                duration: 1000,
                easing: "linear",
                from: 1,
                to: 0,
                loop: true,
              },
            },
            scales: {
              y: {
                // defining min and max so hiding the dataset does not change scale range
                min: 0,
                max: 100,
              },
            },
            customCanvasBackgroundColor: {
              color: 'lightGreen',
            },
            legend: {
              display: true,
            },
            title: {
              display: true,
              text: "SalesPerson",
            },
          },
          scales: {
            y: {
              beginAtZero: 0,
            },
          },
        },

      });

    </script>
@endpush
