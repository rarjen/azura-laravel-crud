<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education = Education::orderBy('id', 'desc')->paginate(5);
        return view('education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'years' => 'required',
            'educational' => 'required',
            'institution' => 'required',
        ]);

        Education::create($request->post());

        return redirect()->route('education.index')->with('success', 'Education has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        return view('education.show', compact('education'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'years' => 'required',
            'educational' => 'required',
            'institution' => 'required',
        ]);

        $education->fill($request->post())->save();

        return redirect()->route('education.index')->with('success', 'Education Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->route('education.index')->with('success', 'Education has been deleted successfully');
    }
}
