<?php

namespace App\Http\Controllers;

use App\Models\Repository;

use Illuminate\Http\Request;

class Repositorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $repositories = Repository::all();
        $data = [
            'repositories' => $repositories
        ];
        return view('repository.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('repository.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
            'description' => 'required',
        ]);
        $new = Repository::create($request -> all());
        return redirect()->route('repository.index')->with('success', $new->title . ' added successfully');
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
        $repository = Repository::find($id);
        return view('repository.edit', compact('repository'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $repositories = Repository::find($id);
        $repositories->update($request->all());
        return redirect()->route('repository.index')->with('success', $repositories->title . ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $repositories = Repository::find($id);
        $repositories->delete();
        return redirect()->route('repository.index')->with('success', $repositories->title . ' deleted successfully');
    }
}
