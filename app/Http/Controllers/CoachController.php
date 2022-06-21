<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coaches = Coach::all();

        return view('pannel.coaches.index',compact('coaches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pannel.coaches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:coach',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'speciality' => 'string'
        ]);

        Coach::create([
            'name' => $request->name,
            'email' => $request->email,
            'code' => rand(1000,9999),
            'phone' => $request->phone,
            'speciality' => $request->speciality
        ]);

        return redirect()->route('coaches.index');
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
    public function edit($id)
    {
        $coach = Coach::find($id);

        return view('pannel.coaches.edit',compact('coach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coach = Coach::find($id);

        $validated = $request->validate([
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'speciality' => 'string'
        ]);

        $coach->update($validated);

        return redirect()->route('coaches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coach::find($id)->delete();

        return redirect()->route('coaches.index');
    }
}
