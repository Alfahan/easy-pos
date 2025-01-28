<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupplierRequest;
use App\Models\City;
use App\Models\Province;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::when(request()->q, function($suppliers) {
            return $suppliers->where('name', 'like', '%'. request()->q .'%');
        })->latest()->paginate(5);

        $suppliers->append(['q' => request()->q]);

        return inertia('Admin/Suppliers/Index', [
            'suppliers' => $suppliers
        ]);
    }

    public function create()
    {
        $provinces = Province::all();

        $cities = [];

        return inertia('Admin/Suppliers/Create', [
            'province' => $provinces,
            'cities' => $cities,
        ]);
    }

    public function store(SupplierRequest $request)
    {
        Supplier::create($request->validate());

        return redirect()->route('admin.suppliers.index');
    }

    public function edit($id)
    {
        $suppliers = Supplier::findOrFail($id);

        $provinces = Province::all();

        $cities = City::where('province_id', $suppliers->province_id)->get();

        return inertia('Admin/Suppliers/Edit', [
            'supplier' => $suppliers,
            'provinces' => $provinces,
            'cities' => $cities,
        ]);
    }

    public function update(SupplierRequest $request, Supplier $supplier)
    {
        $supplier->update($request->validate());

        return redirect()->route('admin.suppliers.index');
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);

        $supplier->delete();

        return redirect()->route('admin.suppliers.index');
    }

    public function getCitiesByProvince($provinceId)
    {
        $cities = City::where('province_id', $provinceId)->get();

        return response()->json($cities);
    }
}
