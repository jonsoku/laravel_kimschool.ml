@extends('layouts.master')
@section('content')
    <div class="board">
        <div class="sboard board-standard bcredit">
            <h2>수정화면입니다.</h2>
            <form method="POST" action="{{route('notices.update', $notice->id)}}">
                {!! csrf_field() !!}
                @include('notices.partial.form')
                <div class="nbutton-submit">
                    <button type="submit">수정하기</button>
                </div>
            </form>
        </div>
    </div>



@endsection
