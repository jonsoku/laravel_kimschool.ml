@extends('layouts.master')
@section('content')
    <div class="board">
        <div class="sboard sboard_sample">
            <table>
                <colgroup>
                    <col width="5%" />
                    <col width="65%" />
                    <col width="10%" />
                    <col width="20%" />
                </colgroup>
                <thead>
                    <td class="sb sb-no">no</td>
                    <td class="sb sb-tit">title</td>
                    <td class="sb sb-author">author</td>
                    <td class="sb sb-created">created_at</td>
                </thead>
                @foreach($frees as $free)
                    <tbody>
                        <td class="sb sb-no">{{$free->id}}</td>
                        <td class="sb sb-tit"><a style="display:block;" href="{{route('frees.show', $free->id)}}">{{$free->title}}</a></td>
                        <td class="sb sb-author">{{$free->user->name}}</td>
                        <td class="sb sb-created">{{$free->created_at}}</td>
                    </tbody>
                @endforeach
            </table>

            @if(Auth::check())
                <div class="nbutton">
                    <a href="{{route('frees.create')}}">게시물 작성</a>
                </div>
            @endif

            <div class="board-paging">
                {!! $frees->links() !!}
            </div>


        </div>
    </div>
@endsection
