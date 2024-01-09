<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CanoeStoreRequest;
use App\Models\Canoe;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class CanoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canoes = Canoe::all();
        return view('admin.canoes.index', compact('canoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.canoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CanoeStoreRequest $request)
    {
        Canoe::create([
            'name' => $request->name,
            'guest_number' => $request->guest_number,
            'status' => $request->status,
            'types' => $request->types,
        ]);

        return to_route('admin.canoes.index')->with('success', 'Canoe created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Canoe $canoe)
    {
        return view('admin.canoes.edit', compact('canoe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CanoeStoreRequest $request, Canoe $canoe)
    {
        $canoe->update($request->validated());

        return to_route('admin.canoes.index')->with('success', 'Canoe updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canoe $canoe)
    {
        $canoe->reservations()->delete();
        $canoe->delete();

        return to_route('admin.canoes.index')->with('danger', 'Canoe daleted successfully.');
    }
}
