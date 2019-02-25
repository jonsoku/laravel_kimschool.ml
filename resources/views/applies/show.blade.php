@extends('layouts.master')
@section('content')
    <div>
        <div class="apply-shows">
            <h2>수강신청이 완료되었습니다.</h2>

            <div class="apply-show apply-show-name">
                <h3>성명</h3>
                <span>{{$apply->applyName}}</span>
            </div>

            <div class="apply-show apply-show-gender">
                <h3>성별</h3>
                <span>{{$apply->applyGender}}</span>
            </div>

            <div class="apply-show apply-show-japanese">
                <h3>일본어능력</h3>
                <span>{{$apply->applyJapanese}}</span>
            </div>

            <div class="apply-show apply-show-visa">
                <h3>비자상태</h3>
                <span>{{$apply->applyVisa}}</span>
            </div>

            <div class="apply-show apply-show-history">
                <h3>경력</h3>
                <span>{{$apply->applyHistory}}</span>
            </div>

            <div class="apply-show apply-show-sns">
                <h3>카카오톡아이디</h3>
                <span>{{$apply->applySns}}</span>
            </div>

            <div class="apply-show apply-show-subject">
                <h3>등록과목</h3>
                @if($apply->applyJava1 !== null)
                    <span class="mr20"><i class="fas fa-chevron-circle-right"></i>&nbsp;{{$apply->applyJava1}} </span>
                @endif
                @if($apply->applyJava2 !== null)
                    <span class="mr20"><i class="fas fa-chevron-circle-right"></i>&nbsp;{{$apply->applyJava2}} </span>
                @endif
                @if($apply->applyJava3 !== null)
                    <span class="mr20"><i class="fas fa-chevron-circle-right"></i>&nbsp;{{$apply->applyJava3}} </span>
                @endif
                @if($apply->applyWeb1 !== null)
                    <span class="mr20"><i class="fas fa-chevron-circle-right"></i>&nbsp;{{$apply->applyWeb1}} </span>
                @endif
                @if($apply->applyWeb2 !== null)
                    <span class="mr20"><i class="fas fa-chevron-circle-right"></i>&nbsp;{{$apply->applyWeb2}} </span>
                @endif
                @if($apply->applyWeb3 !== null)
                    <span class="mr20"><i class="fas fa-chevron-circle-right"></i>&nbsp;{{$apply->applyWeb3}} </span>
                @endif
            </div>


            </ul>
            <div class="nbutton">
                <a href="/"> 홈으로</a>
                {{--<a href="{{route('applies.edit', $apply->id)}}">수정하기</a>--}}
                {{--<form method="post" action="{{route('notices.destroy', $notice->id)}}">--}}
                    {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}
                    {{--<input type="hidden" name="_method" value="delete">--}}
                    {{--<button value="">글 삭제하기</button>--}}
                {{--</form>--}}
            </div>
        </div>
    </div>





@endsection
