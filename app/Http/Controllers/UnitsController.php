<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitsStoreRequest;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $units = Unit::all();

        return view('admin.units.index', compact('units'));
    }

    /**
     * @param \App\Http\Requests\UnitsStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnitsStoreRequest $request)
    {
        $unit = Unit::create($request->all());

        $request->session()->flash('unit.name', $unit->name);

        return redirect()->route('unit.index');
    }
}
