@extends('layouts.master')
@section('content')
    <div class="board">
        <div class="sboard board-standard bcredit">
            <h2>등록화면입니다.</h2>
            <form method="POST" action="{{route('notices.store')}}">
                {!! csrf_field() !!}
                @include('notices.partial.form')

                <div class="nbutton-submit">
                    <button type="submit">등록하기</button>
                </div>
            </form>
        </div>
    </div>
@endsection
