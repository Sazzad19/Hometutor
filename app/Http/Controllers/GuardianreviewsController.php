<?php

namespace App\Http\Controllers;

use App\Guardianreviews;
use Illuminate\Http\Request;

class GuardianreviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function storefeedback(Request $request)
    {
    $guardianeviews= new Guardianreviews();
    $guardianeviews->guardian_id=$request->guardian_id;
    $guardianeviews->ratting=$request->ratting;
    $guardianeviews->feedback=$request->feedback;
    $guardianeviews->save();

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
     * @param  \App\Guardianreviews  $guardianreviews
     * @return \Illuminate\Http\Response
     */
    public function show(Guardianreviews $guardianreviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guardianreviews  $guardianreviews
     * @return \Illuminate\Http\Response
     */
    public function edit(Guardianreviews $guardianreviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guardianreviews  $guardianreviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guardianreviews $guardianreviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guardianreviews  $guardianreviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guardianreviews $guardianreviews)
    {
        //
    }
}
