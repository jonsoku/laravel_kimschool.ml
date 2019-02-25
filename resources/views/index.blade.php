@extends('layouts.master')
@section('slide')
    <div id="slide">
        <div class="slide">
            <ul>
                <li><a href="#"><img src="/img/slide/slide1.jpeg" alt=""></a></li>
                <li><a href="#"><img src="/img/slide/slide2.jpeg" alt=""></a></li>
                <li><a href="#"><img src="/img/slide/slide3.jpeg" alt=""></a></li>
                <li><a href="#"><img src="/img/slide/slide4.jpeg" alt=""></a></li>
                <li><a href="#"><img src="/img/slide/slide5.jpeg" alt=""></a></li>
                <li><a href="#"><img src="/img/slide/slide6.jpeg" alt=""></a></li>
            </ul>
            <div class="dots">

            </div>
            <div>
                <div class="arrow left-arrow">
                    <i class="fas fa-angle-left"></i>
                </div>
                <div class="arrow right-arrow">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <script>
        const slideUl = document.querySelector('.slide ul');
        const slideLi = slideUl.querySelectorAll('li');
        const length = slideLi.length;
        const dots = document.querySelector('.dots');
        const leftArrow = document.querySelector('.left-arrow');
        const rightArrow = document.querySelector('.right-arrow');
        let page = 0;



        for(let i = 0 ; i < length ; i++){
            const dot = document.createElement('div');
            dots.appendChild(dot);
            dot.classList.add('dot');
        };

        const dot = document.querySelectorAll('.dot');

        for(let i = 0; i < length ; i++){
            dot[i].addEventListener('click', function(){
                moveTo(i);
                page = i;
            });
        };

        rightArrow.addEventListener('click', function(){
            if(page === length){
                page = 0;
            }
            rightSlide();
        })

        function rightSlide(){
            moveTo(page+1);
            page++;
        }

        leftArrow.addEventListener('click', function(){
            if(page < 1){
                page = length;
            }
            leftSlide();
        })

        function leftSlide(){
            moveTo(page-1);
            page--;
        }




        function moveTo(index){
            index = index || 0;
            index = index % length;

            for(let i = 0; i < length ; i++){
                for(let j = 0 ; j < length ; j++){
                    if(slideLi[j].classList.contains('slide_showing')){
                        slideLi[j].classList.remove('slide_showing');
                    }
                }
                slideLi[index].classList.add('slide_showing');
            }

            for(let i = 0; i < length ; i++){
                for(let j = 0 ; j < length ; j++){
                    if(dot[j].classList.contains('dot_showing')){
                        dot[j].classList.remove('dot_showing');
                    };
                };
                dot[index].classList.add('dot_showing');
            }
        }

        function init(){
            moveTo(0);
            setInterval(function(){
                moveTo(page+1);
                page++;
                if(page === length){
                    page = 0;
                }
            }, 1000 * 4)
        }

        init();



    </script>
@endsection
@section('content')

@endsection
