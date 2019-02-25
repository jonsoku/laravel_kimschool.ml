<?php

namespace App\Http\Controllers;

use App\Free;
use App\Http\Requests\FreeRequest;
use Illuminate\Http\Request;

class FreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frees = Free::latest()->paginate(10);

        return view('frees.index', [
            'frees' => $frees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $free = new Free;
        return view('frees.create', [
            'free' => $free,
        ]);
    }

    public function store(FreeRequest $request)
    {
        $user = $request->user();

        $free = $user->frees()->create($request->all());

        return redirect(route('frees.show', $free->id));
    }


    public function show(Free $free)
    {

        $freeComments = $free->freecomments;


        return view('frees.show', [
            'free' => $free,
            'freeComments' => $freeComments,
        ]);
    }

    public function edit(Free $free)
    {
        return view('frees.edit', [
            'free' => $free
        ]);
    }

    public function update(FreeRequest $request, Free $free)
    {
        $free->update($request->all());

        return redirect(route('frees.show', $free->id));
    }

    public function destroy(Free $free)
    {
        $free->delete();

        return redirect(route('frees.index'));
    }
}
