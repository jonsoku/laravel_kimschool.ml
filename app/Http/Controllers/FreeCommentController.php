<?php

namespace App\Http\Controllers;

use App\Free;
use App\FreeComment;
use Illuminate\Http\Request;

class FreeCommentController extends Controller
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
        //
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
    public function store(Request $request, Free $free)
    {
        $user = $request->user();
        $user->freeComments()->create(array_merge(
            $request->all(),
            ['free_id' => $free->id]
        ));

        return redirect(route('frees.show', $free->id ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FreeComment  $freeComment
     * @return \Illuminate\Http\Response
     */
    public function show(FreeComment $freeComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FreeComment  $freeComment
     * @return \Illuminate\Http\Response
     */
    public function edit(FreeComment $freeComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FreeComment  $freeComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FreeComment $freeComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FreeComment  $freeComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(FreeComment $freeComment)
    {
        //
    }
}
