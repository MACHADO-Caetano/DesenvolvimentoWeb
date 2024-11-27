<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function showAllSuppliers()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', compact('suppliers'));
    }

    public function createSupplier()
    {
        return view('suppliers.create');
    }

    public function createFormSupplier(Request $request)
    {
        Supplier::create($request->all());
        return redirect('suppliers')->with('success', 'Supplier created successfully.');
    }

    public function editFormSupplier($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.edit', compact('supplier'));
    }

    public function updateSupplier(Request $request, $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());
        return redirect('suppliers')->with('success', 'Supplier updated successfully.');
    }

    public function deleteSupplier($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();    
        return redirect('suppliers')->with('success', 'Supplier deleted successfully.');
    }
}
