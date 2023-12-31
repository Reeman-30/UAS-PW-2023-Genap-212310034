<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(Shop $shop) {
        return view('modules.auth.admin.dashboard.shop.index', [
            'shops' => $shop::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('modules.auth.admin.dashboard.shop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $data = $request->all();

        Shop::create($data);

        return redirect('/admin/toko')->with('success', 'Toko baru berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
