@extends('layouts.master')
@section('content')
    <div class="board">
        <div class="sboard board-standard bshow">
            <h2>Q&A</h2>

            <p class="bs btit">{{$free->title}}</p>

            <div class="bs-info">
                <span class="bs bid"><span>No.</span>{{$free->id}}</span>
                <span class="bs bname"><span>작성자</span>{{$free->user->name}}</span>
                <span class="bs bcreated"><span>작성일</span>{{$free->created_at}}</span>
                <span class="bs bupdated"><span>수정일</span>{{$free->updated_at}}</span>
            </div>


            <p class="bs bcont"><span>{{$free->content}}</span></p>



            <div class="nbutton">
                <a href="{{route('frees.index')}}">목록으로</a>
                @if(Auth::check() && Auth::id() === $free->user->id)
                    <a href="{{route('frees.edit', $free->id)}}">수정하기</a>

                    <form method="post" action="{{route('frees.destroy', $free->id)}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="delete">
                        <div class="nbutton-submit nbutton-delete">
                            <button>글 삭제하기</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>



        <div class="board-comment">
            <h2>Comments</h2>
            @if(auth()->check())
                <form method="post" action="{{route('frees.freeComments.store', $free->id)}}">
                    {!! csrf_field() !!}
                    <textarea name="body" placeholder="comment를 작성해주세요."></textarea>
                    <button type="submit">등록</button>
                </form>
            @endif
            @if ($freeComments->count())
                <ul>
                    @foreach ($freeComments as $freeComment)
                        <li>
                            <span>{{ $freeComment->body }}</span>
                            <br/>
                            <small>
                                by {{ $freeComment->user->name }}
                                •
                                {{ $freeComment->created_at->diffForHumans() }}
                            </small>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
