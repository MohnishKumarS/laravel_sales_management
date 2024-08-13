<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Sale;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function pdf_generate()
    {
        return view('admin.pdf.generate');
    }

    public function pdf_view()
    {
        $sales = Sale::orderBy('sales_date', 'desc')->get();
        // return $sales;
        return view('admin.pdf.view', compact('sales'));
    }

    public function pdf_download()
    {
        $sales = Sale::orderBy('sales_date', 'desc')->get();
        $pdf = PDF::loadView('admin.pdf.view', compact('sales'));
        $todayDate = Carbon::now()->format('d-m-Y');
        return $pdf->download('sales-report-' . $todayDate . '.pdf');
    }

    // graph 
    public function sales_graph()
    {
        $fromDate = Carbon::now()->subMonths(6);
        $toDate = Carbon::now();

        $salesData = Sale::where('sales_date', '>=', Carbon::now()->subMonths(6))
            ->selectRaw('DATE_FORMAT(sales_date, "%m-%y") as month, SUM(sales_amount) as total_sales')
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();

        $salesPerson = Sale::select('sales_person', DB::raw('SUM(sales_amount) as total_sales'))
            ->groupBy('sales_person')
            ->get();

        // return $salesData;
        return view('admin.graph.list',['salesData'=>$salesData,'salesPerson' => $salesPerson]);
    }
}
