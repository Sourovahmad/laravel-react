<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return students::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        students::create($request->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(students $students)
    {
        return $students;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(students $students)
    {
        //
    }
}
