@extends('layouts.master')
@section('content')
    <div class="apply">
        <form method="POST" action="{{route('applies.store')}}">
            {!! csrf_field() !!}
            <div class="subject_info">
                <h2><i class="fas fa-user-tie"></i>  수강생 기본인적사항</h2>
                <fieldset>
                    <label for="applyName"><span>성명</span></label>
                    <input id="applyName" type="text" name="applyName" value="{{ Auth::user()->name }}">
                </fieldset>


                <fieldset>
                    <label for="applyAge"><span>나이</span></label>
                    <input id="applyAge"type="text" name="applyAge">
                </fieldset>



                <fieldset>
                    <label for="applyGender"><span>성별</span></label>
                    <select id="applyGender" name="applyGender">
                        <option selected>선택해주세요.</option>
                        <option>여</option>
                        <option>남</option>
                    </select>
                </fieldset>



                <fieldset>
                    <label for="applyJapanese"><span>일본어레벨</span></label>
                    <select id="applyJapanese" name="applyJapanese">
                        <option selected>선택해주세요.</option>
                        <option>상</option>
                        <option>중</option>
                        <option>하</option>
                    </select>
                </fieldset>



                <fieldset>
                    <label for="applyVisa"><span>현재비자</span></label>
                    <select id="applyVisa" name="applyVisa">
                        <option selected>선택해주세요.</option>
                        <option>유학비자</option>
                        <option>워킹홀리데이</option>
                        <option>취업비자</option>
                        <option>고도인재비자</option>
                        <option>배우자비자</option>
                        <option>기타</option>
                    </select>

                </fieldset>


                <fieldset>
                    <label for="applyHistory"><span>IT경력</span></label>
                    <select id="applyHistory" name="applyHistory">
                        <option selected>선택해주세요.</option>
                        <option>1년 미만</option>
                        <option>1년~2년</option>
                        <option>2년~3년</option>
                        <option>3년~4년</option>
                        <option>4년이상</option>
                    </select>
                </fieldset>



                <fieldset>
                    <label for="applySns"><span>카카오톡ID</span></label>
                    <input id="applySns" type="text" name="applySns">
                </fieldset>

            </div>


            <div class="subject_checkbox mt60">

                <h2><i class="fas fa-book-open"></i>   수강신청과목</h2>

                <div class="scheckbox scheckbox1">
                    <h3>JAVA</h3>
                    <div class="checks">
                        <input id="applyJava1" type="checkbox" name="applyJava1" value="자바기초">
                        <label for="applyJava1"><span>기초</span></label>
                    </div>

                    <div class="checks">
                        <input id="applyJava2" type="checkbox" name="applyJava2" value="자바중급">
                        <label for="applyJava2"><span>중급</span></label>
                    </div>


                    <div class="checks">
                        <input id="applyJava3" type="checkbox" name="applyJava3" value="자바고급">
                        <label for="applyJava3"><span>고급</span></label>
                    </div>
                </div>


                <div class="scheckbox scheckbox2">
                    <h3>WEB</h3>
                    <div class="checks">
                        <input id="applyWeb1" type="checkbox" name="applyWeb1" value="웹기초">
                        <label for="applyWeb1"><span>기초</span></label>

                    </div>
                    <div class="checks">
                        <input id="applyWeb2"  type="checkbox" name="applyWeb2" value="웹중급">
                        <label for="applyWeb2"><span>중급</span></label>

                    </div>
                    <div class="checks">
                        <input id="applyWeb3"  type="checkbox" name="applyWeb3" value="웹고급">
                        <label for="applyWeb3"><span>고급</span></label>

                    </div>
                </div>
            </div>


            <div class="abutton">
                <button type="submit">수강신청</button>
            </div>
        </form>

    </div>



@endsection
