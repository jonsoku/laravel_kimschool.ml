@extends('layouts.master')
@section('content')
    <div class="introduce">
        <div class="introduce-blocks mt50">
            <ul>
                <li><span>사업내용</span></li>
                <li><span>교실소개</span></li>
                <li><span>커리큘럼</span></li>
                <li><span>취업로드맵</span></li>
                <li><span>취업실적</span></li>
                <li><span>파트너사</span></li>
            </ul>
        </div>

        <div class="introduce-pages mt50 mb50">
            <ul>
                <li><a href="#">사업내용</a></li>
                <li><a href="#">교실소개</a></li>
                <li><a href="#">커리큘럼</a></li>
                <li><a href="#">취업로드맵</a></li>
                <li><a href="#">취업실적</a></li>
                <li><a href="#">파트너사</a></li>
            </ul>
        </div>
    </div>

    <script>
        const introduceUl = document.querySelector('.introduce-pages ul');
        const introduceLi = introduceUl.querySelectorAll('li');
        const length = introduceLi.length;
        const introduceBlocks = document.querySelector('.introduce-blocks');
        const introduceBlock = introduceBlocks.querySelectorAll('ul li');
        const introduceBlockSpan = document.querySelectorAll('.introduce-blocks ul li span');

        let page = 0;

        for(let i = 0; i < length ; i++){
            introduceBlock[i].classList.add('introduce-block');
            introduceBlock[i].style.width = 100/length +"%";
        }

        for(let i = 0; i < length ; i++){
            introduceBlock[i].addEventListener('click', function(){
                moveTo(i);
                page = i;
            });
        };

        function moveTo(index){
            index = index || 0;
            index = index % length;

            for(let i = 0 ; i<length ; i++){
                for(let j = 0 ; j<length ; j++){
                    if(introduceLi[j].classList.contains('showing')){
                        introduceLi[j].classList.remove('showing');
                        introduceBlock[j].classList.remove('ibsshowing');
                    }
                }
                introduceLi[index].classList.add('showing');
                introduceBlock[index].classList.add('ibsshowing');
            }

        };

        function init(){
          moveTo(0);
        };

        init();

    </script>
@endsection
