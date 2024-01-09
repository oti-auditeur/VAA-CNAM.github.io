<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TrainingStoreRequest;
use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::all();
        return view('admin.trainings.index', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.trainings.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingStoreRequest $request)
    {
        $image = $request->file('image')->store('public/trainings');

        $training = Training::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'types' => $request->types
        ]);

        if ($request->has('categories')) {
            $training->categories()->attach($request->categories);
        }

        return to_route('admin.trainings.index')->with('success', 'Training created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $training)
    {
        $categories = Category::all();
        return view('admin.trainings.edit', compact('training', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Training $training)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'types' => 'required'
        ]);
        $image = $training->image;
        if ($request->hasFile('image')) {
            Storage::delete($training->image);
            $image = $request->file('image')->store('public/trainings');
        }

        $training->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'types' => $request->types
        ]);

        if ($request->has('categories')) {
            $training->categories()->sync($request->categories);
        }
        return to_route('admin.trainings.index')->with('success', 'Training updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        Storage::delete($training->image);
        $training->categories()->detach();
        $training->delete();
        return to_route('admin.trainings.index')->with('danger', 'Training deleted successfully.');
    }
}
