<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Exports\AssetsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Asset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */

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

    public function detailassets($id)
    {
        $assets = Asset::find($id);

        $detailasset = Asset::where('id', $id)->get();

        return view('assets.detail', [
            'asset' => $assets,
            'detailasset' => $detailasset

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
    public function edit($id)
    {
        $asset = Asset::findOrFail($id);
        return view('', compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (!$request->hasFile('image')) {
            $asset = Asset::find($id);
            $asset->update([
                'asset_tag' => $request->judul,
                'serial_number' => $request->pengarang,
                'model' => $request->penerbit,
                'status' => $request->th_terbit,
                'note' => $request->note,
            ]);
            return redirect()->route('');
        } else {

            $asset = Asset::find($id);
            Storage::delete($asset->image);
            $asset->update([
                'asset_tag' => $request->judul,
                'serial_number' => $request->pengarang,
                'model' => $request->penerbit,
                'status' => $request->th_terbit,
                'note' => $request->note,
                'image' => $request->file('image')->store('assets'),
            ]);
            return redirect()->route('');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);
        Storage::delete($asset->image);
        $asset->delete();
        return redirect()->route('assets.index');
    }
}
