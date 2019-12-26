<?php

namespace App\Http\Controllers;

use App\Tutorreviews;
use Illuminate\Http\Request;

class TutorreviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function storefeedback(Request $request)
    {
    $tutorreviews= new Tutorreviews();
    $tutorreviews->tutor_id=$request->tutor_id;
    $tutorreviews->ratting=$request->ratting;
    $tutorreviews->feedback=$request->feedback;
    $tutorreviews->save();

        return redirect()->back();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tutorreviews  $tutorreviews
     * @return \Illuminate\Http\Response
     */
    public function show(Tutorreviews $tutorreviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tutorreviews  $tutorreviews
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutorreviews $tutorreviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tutorreviews  $tutorreviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutorreviews $tutorreviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tutorreviews  $tutorreviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutorreviews $tutorreviews)
    {
        //
    }
}
