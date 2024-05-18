<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Exports\AssetsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Asset;


class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function table(Request $request)
    {
        if ($request->has('search')) {
            $assets = Asset::where('asset_tag', 'LIKE', '%' . $request->search . '%')->paginate(4);
        } else {
            $assets = Asset::all();
        }


        return view('assets.index', [
            'assets' => $assets
        ]);
    }

    public function export()
    {
        return Excel::download(new AssetsExport, 'assets.xlsx');
    }

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $assets = Asset::where('asset_tag', 'LIKE', '%' . $request->search . '%')->paginate(4);
        } else {
            $assets = Asset::all();
        }


        return view('assets.index', [
            'assets' => $assets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('assets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!empty($request->file('image'))) {
            $assets = $request->all();
            $assets['image'] = $request->file('image')->store('image');

            Asset::create($assets);

            return redirect()->route('assets.index');
        } else {
            $assets = $request->all();
            Asset::create($assets);

            return redirect()->route('assets.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $assets = Asset::findOrFail($id);
        $assets->delete();
        return redirect()->route('assets.index');
    }
}
