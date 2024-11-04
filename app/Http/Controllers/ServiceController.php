<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($companyId)
    {
        $company = Company::findOrFail($companyId);
        return view('services.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $companyId)
    {
        $validatedData = $request->validate([
            'service_name' => 'required|string|max:255',
            'service_description' => 'required|string',
        ]);

        $service = new Service($validatedData);
        $service->company_id = $companyId;
        $service->save();

        return redirect()->route('company.show', $companyId)->with('success', 'Layanan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
