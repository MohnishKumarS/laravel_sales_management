<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function create_sale()
    {
        if (auth()->check()) {
            return view('sales.create');
        } else {
            return redirect()->back()->with('status', 'error')->with('title', 'Please login to continue');
        }
    }

    public function store_sale(Request $req)
    {
        // return $req->all();

        $req->validate([
            'product_name' => 'required',
            'sales_amount' => 'required|numeric',
            'sales_date' => 'required|date',
            'sales_person' => 'required',
        ]);

        Sale::create($req->all());
        return redirect('/')->with('status', 'success')->with('title', 'Sales added successfully');
    }

    public function edit_sale($id)
    {
        $sale = Sale::find($id);
        if ($sale) {
            return view('sales.edit', compact('sale'));
        } else {
            return redirect('/')->with('status', 'error')->with('title', 'Data not found!');
        }
    }

    public function update_sale(Request $req, $id)
    {
        // return $id;
        $sale = Sale::findOrFail($id);
        if ($sale) {
            $req->validate([
                'product_name' => 'required',
                'sales_amount' => 'required|numeric',
                'sales_date' => 'required|date',
                'sales_person' => 'required',
            ]);

            $sale->update($req->all());
            return redirect('/')->with('status', 'success')->with('title', 'Sales updated successfully');
        } else {
            return redirect('/')->with('status', 'error')->with('title', 'Data not found');
        }
    }

    public function delete_sale($id){
        $sale = Sale::findOrFail($id);
        if($sale){
            $sale->delete();
            return redirect('/')->with('status','success')->with('title', 'Sales deleted successfully');
        }else{
            return redirect('/')->with('status', 'error')->with('title', 'Data not found!');
        }
    }
}
