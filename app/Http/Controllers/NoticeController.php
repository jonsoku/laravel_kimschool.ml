<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticeRequest;
use App\Notice;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::latest()->paginate(3);

        return view('notices.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notice = new Notice;
        return view('notices.create', compact('notice'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticeRequest $request)
    {

        $user = $request->user();

        $notice = $user->notices()->create($request->all());

        return redirect(route('notices.show', $notice->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        $noticeComments = $notice->noticeComments;

        return view('notices.show', compact('notice', 'noticeComments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        return view('notices.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(NoticeRequest $request, Notice $notice)
    {
        $notice->update($request->all());

        return redirect(route('notices.show', $notice->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        $notice->delete();

        return redirect(route('notices.index'));
    }
}
