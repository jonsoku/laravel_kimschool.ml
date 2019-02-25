<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>JONGSOKU</title>

    <!--style-->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
<div id="wrap">
    <div id="header">
        <div class="container">
            <div class="header">
                <div class="mlogin">
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('로그아웃') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>


                            @else
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">회원가입</a>
                                @endif
                                    <a href="{{ route('login') }}">로그인</a>
                            @endauth
                        </div>
                    @endif
                </div>
                <div class="mlogo">
                    <h1><a style="color:#fff;" href="http://54.249.16.16">JONSOKU</a></h1>
                </div>
                <nav class="mnav">
                    <ul>
                        <li><a href="/">홈으로</a></li>
                        <li><a href="{{route('introduces.index')}}">학원소개</a></li>
                        <li><a href="{{route('notices.index')}}">공지사항</a></li>
                        <li><a href="{{route('applies.index')}}">수강신청</a></li>
                        <li><a href="{{route('frees.index')}}">질문답변게시판</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    @yield('slide')

    <div id="content">
        <div class="container">
            <div class="content">
                @yield('content')w
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <div class="footer">
                작업예정
            </div>
        </div>
    </div>
</div>
</body>
</html>
