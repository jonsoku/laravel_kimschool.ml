@extends('layouts.master')
@section('content')
    <div class="board">
        <div class="sboard board-standard bshow">
            <h2>Notice</h2>

            <p class="bs btit">{{$notice->title}}</p>

            <div class="bs-info">
                <span class="bs bid"><span>No.</span>{{$notice->id}}</span>
                <span class="bs bname"><span>작성자</span>{{$notice->user->name}}</span>
                <span class="bs bcreated"><span>작성일</span>{{$notice->created_at}}</span>
                <span class="bs bupdated"><span>수정일</span>{{$notice->updated_at}}</span>
            </div>


            <p class="bs bcont"><span>{{$notice->content}}</span></p>



            <div class="nbutton">
                <a href="{{route('notices.index')}}">목록으로</a>
                @if(Auth::check() && Auth::id() === $notice->user->id)
                    <a href="{{route('notices.edit', $notice->id)}}">수정하기</a>

                    <form method="post" action="{{route('notices.destroy', $notice->id)}}">
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
                <form method="post" action="{{route('notices.noticeComments.store', $notice->id)}}">
                    {!! csrf_field() !!}
                    <textarea name="body" placeholder="comment를 작성해주세요."></textarea>
                    <button type="submit">등록</button>
                </form>
            @endif
            @if ($noticeComments->count())
                <ul>
                    @foreach ($noticeComments as $noticeComment)
                        <li>
                            <span>{{ $noticeComment->body }}</span>
                            <br/>
                            <small>
                                by {{ $noticeComment->user->name }}
                                •
                                {{ $noticeComment->created_at->diffForHumans() }}
                            </small>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
