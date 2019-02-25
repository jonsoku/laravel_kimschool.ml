<?php

namespace App\Http\Controllers;

use App\Apply;
use App\Http\Requests\ApplyRequest;
use Illuminate\Http\Request;

class ApplyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect(route('applies.create'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplyRequest $request)
    {
        $user = $request->user();

        $apply = $user->applies()->create($request->all());

        return redirect(route('applies.show', $apply->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function show(Apply $apply)
    {
        return view('applies.show', compact('apply'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function edit(Apply $apply)
    {
        return view('applies.edit', compact('apply'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apply  $apply
     * @return \Illuminate\Http\Response
     */

    public function update(ApplyRequest $request, Apply $apply)
    {
        $apply->update($request->all());

        return redirect(route('applies.show', $apply->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apply $apply)
    {
        //
    }
}
