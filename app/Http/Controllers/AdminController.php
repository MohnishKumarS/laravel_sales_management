<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->count();
        $salesCount = Sale::count();
        $totalSales = Sale::sum('sales_amount');
        $salespersonCount = Sale::distinct('sales_person')->count('sales_person');

        return view('admin.index', compact('users', 'totalSales', 'salesCount', 'salespersonCount'));
    }

    public function sales_list()
    {
        $sales = Sale::paginate(10);
        return view('admin.sales.list', compact('sales'));
    }

    public function users_list()
    {
        $users = User::paginate(10);
        return view('admin.users.list', compact('users'));
    }
    // sales CRUD methods
    // sales 
    public function sales_create()
    {
        return view('admin.sales.add');
    }
    public function sales_store(Request $req)
    {
        // return $req->all();

        $req->validate([
            'product_name' => 'required',
            'sales_amount' => 'required|numeric',
            'sales_date' => 'required|date',
            'sales_person' => 'required',
        ]);

        Sale::create($req->all());
        return redirect('admin/sales-create')->with('status', 'success')->with('title', 'Sales added successfully');
    }
    public function sales_edit($id)
    {
        $sale = Sale::find($id);
        if ($sale) {
            return view('admin.sales.edit', compact('sale'));
        } else {
            return redirect('admin/sales-list')->with('status', 'error')->with('title', 'Data not found!');
        }
    }
    public function sales_update(Request $req, $id)
    {
        $sale = Sale::findOrFail($id);
        if ($sale) {
            $req->validate([
                'product_name' => 'required',
                'sales_amount' => 'required|numeric',
                'sales_date' => 'required|date',
                'sales_person' => 'required',
            ]);

            $sale->update($req->all());
            return redirect('/admin/sales-list')->with('status', 'success')->with('title', 'Sales updated successfully');
        } else {
            return redirect('/admin/sales-list')->with('status', 'error')->with('title', 'Data not found');
        }
    }
    public function sales_delete($id)
    {
        $sale = Sale::find($id);
        if ($sale) {
            $sale->delete();
            return redirect()->route('admin.sales.list')->with('status', 'success')->with('title', 'Sale deleted successfully');
        }
    }


    public function avg_sales_product()
    {
        $query = 'SELECT product_name, AVG(sales_amount) as average_sales
        FROM sales
        GROUP BY product_name ORDER BY average_sales';
        $salesPerProduct =  DB::select($query);
        return view('admin.sales.avgProductSale', compact('salesPerProduct'));
    }

    public function sales_per_person()
    {
        $query = 'SELECT sales_person, SUM(sales_amount) as total_sales
        FROM sales
        GROUP BY sales_person ORDER BY total_sales';

        $salesPerPerson = DB::select($query);
        return view('admin.sales.totalsalesperperson', compact('salesPerPerson'));
    }
}
