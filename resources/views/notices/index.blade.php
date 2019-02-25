@extends('layouts.master')
@section('content')
    <div class="board">
        <div class="sboard notice-board">
            <ul>
                @foreach($notices as $notice)
                    <li>
                        <p class="nb ndate"><i class="far fa-calendar-alt"></i>      {{$notice->created_at}}</p>
                        <p class="nb ntit"><a href="{{route('notices.show', $notice->id)}}">{{$notice->title}}</a></p>
                        <p class="nb ncont">{{$notice->content}}</p>
                        <div class="more notice-more">
                            <a href="{{route('notices.show', $notice->id)}}">continue reading</a>
                        </div>
                    </li>

                @endforeach
            </ul>

            @if(Auth::check() && Auth::id() == 1)
                <div class="nbutton">
                    <a href="{{route('notices.create')}}">공지글 작성</a>
                </div>
            @endif

            <div class="board-paging">
                {!! $notices->links() !!}
            </div>


        </div>
    </div>



@endsection
