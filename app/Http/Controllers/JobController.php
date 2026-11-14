<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Available Jobs";
        $subtitle = "Here You Can Find All Jobs";
        $jobs = [
            "Web Developer",
            "Database Adminstration",
            "Frontend Developer",
            "UI UX Designer",
        ];

        return view("jobs.index", compact("title", "jobs" , "subtitle"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->input("title");
        $description = $request->input("description");

        return "the title: " . $title . "," . "description: " . $description;

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
        //
    }
}
