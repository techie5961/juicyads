@extends('layout.users.index')
@section('title')
    Homepage
@endsection
@section('css')
    <style class="css">
        .observe{
            opacity:0;
        }
        .observe.scale-in{
            animation:scale-in 1.0s ease forwards;
        }
        .observe.scale-out{
            animation:scale-out 1.0s ease forwards;
        }

        @keyframes scale-in{
            0%{
                transform:scale(0.8);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
          @keyframes scale-out{
            0%{
                transform:scale(1.2);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
        .observe.trans-up{
            animation:trans-up 1s ease forwards;
        }
        @keyframes trans-up{
            0%{
                opacity:0;
                transform:translateY(30px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .observe.trans-from-left{
            animation:trans-from-left 2s ease forwards;
        }
        @keyframes trans-from-left{
            0%{
                opacity:0;
                transform:translateX(-50px);
            }
             100%{
                opacity:1;
                transform:translateX(0);
            }
        }
         .observe.trans-from-right{
            animation:trans-from-right 2s ease forwards;
        }
        @keyframes trans-from-right{
            0%{
                opacity:0;
                transform:translateX(50px);
            }
             100%{
                opacity:1;
                transform:translateX(0);
            }
        }
          .observe.trans-from-bottom{
            animation:trans-from-bottom 2s ease forwards;
        }
        @keyframes trans-from-bottom{
            0%{
                opacity:0;
                transform:translateY(50px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
                  .observe.trans-from-top{
            animation:trans-from-top 2s ease forwards;
        }
        @keyframes trans-from-top{
            0%{
                opacity:0;
                transform:translateY(-50px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .observe.rotate-in-from-left{
            animation:rotate-in-from-left 1s ease forwards;
        }
        @keyframes rotate-in-from-left{
            0%{
                transform:rotate(-90deg) translateX(-200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
        .observe.rotate-in-from-right{
            animation:rotate-in-from-right 1s ease forwards;
        }
        @keyframes rotate-in-from-right{
            0%{
                transform:rotate(90deg) translateX(200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-top{
            animation:rotate-in-from-top 1s ease forwards;
        }
        @keyframes rotate-in-from-top{
            0%{
                transform:rotate(45deg) translateY(50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-bottom{
            animation:rotate-in-from-bottom 1s ease forwards;
        }
        @keyframes rotate-in-from-bottom{
            0%{
                transform:rotate(-180deg) translateY(-50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
        }
        .hero-title{
            font-size:2rem;
            font-weight:900;
            text-align: center;
            background:var(--gradient);
           color:transparent;
            background-clip:text;
            -webkit-background-clip: text;
        }
        .features-card{
            display:flex;
            flex-direction:column;
            gap:10px;
            padding:10px;
            border:1px solid var(--bg-lighter);
            background:var(--bg-light);
            border-radius:10px;
            align-items:center;

        }
        .features-card .symbol{
            background:var(--gradient);
            color:var(--gradient-text);
            padding:10px;
            border-radius:50%;
            height:70px;
            width:70px;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .features-title{
            font-weight:800;
            font-size:1.5rem;

        }
        .features-details{
            opacity:0.7;
            text-align: center;
        }
        .faq .answer{
            display:none;
        }
        .faq .question *{
            transition: all 0.5s ease;
        }
        .faq.active .question .icon{
            background:var(--gradient);
            box-shadow: 0 0 10px var(--primary-brighter);
          

        }
         .faq.active .question .icon svg{
          transform:rotate(90deg);
          

        }
        .faq.active .question{
            display:flex;
        }
        .faq.active .answer{
            display:flex;
        }
         .get-started-btn{
            position: relative;
         }
        .get-started-btn::before{
            content:'';
            position:absolute;
            left:0;
            top:0;
            bottom:0;
            background:linear-gradient(to right,transparent,rgba(255,255,255,0.5),transparent,transparent);
            width:100%;
            animation:shiny 2s linear infinite;
            transform:skew(40deg)
        }
        @keyframes shiny{
            0%{
                left:-25%;
            }
            25%{
                left:25%;
            }
            50%{
                left:50%;
            }
            75%{
                left:75%;
            }
            100%{
                left:100%
            }
        }

    </style>
@endsection
@section('main')
    <section class="w-full align-center  g-10 column p-10">
           
        <div class="hero-title">
           <span style="color:var(--text)"> Earn Money with</span> <br> <span>{{ config('app.name') }}</span>
        </div>
        
        <span class="text-center font-1">
           Complete simple tasks, watch ads, take surveys, and earn real <span class="naira-symbol">₦aira</span>. Join thousands of users who are already making extra income with our platform.
        </span>
       <div style="padding-top:20px;padding-bottom:20px;" class="grid pc-grid-2 w-full g-10 m-y-20">
        <div onclick="window.location.href='{{ url('register') }}'" style="background: var(--primary);color:var(--primary-text);" class="h-50 pointer get-started-btn w-full bold row g-10 justify-center p-10 br-1000 clip-1000">
        Get Started
        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z" fill="CurrentColor"></path>
</svg>

    </div>
    <div onclick="window.location.href='{{ url('login') }}'" style="border:1px solid var(--primary);color:var(--primary);background:transparent" class="h-50 pointer clip-5 w-full bold row g-10 justify-center p-10 br-1000 clip-1000">
        Login
        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z" fill="CurrentColor"></path>
</svg>

    </div>
       </div>
        <p>Available for Nigerians - Get paid directly in <span class="naira-symbol">₦aira</span></p>
       
         <img data-class='scale-in' src="{{ asset('banners\IMG_2760.webp') }}" alt="" class="w-full m-x-auto observe br-10 max-w-500">
        
       
        <span class="hero-title">Why Choose {{ config('app.name') }}</span>
        <span class="text-center">Our platform offers a variety of ways to earn money online with flexibility and transparency.</span>
        <div class="grid p-20 pc-grid-2 w-full g-10">
            <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM200,192H56a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v76.69l34.34-34.35a8,8,0,0,1,11.32,0L128,132.69,172.69,88H144a8,8,0,0,1,0-16h48a8,8,0,0,1,8,8v48a8,8,0,0,1-16,0V99.31l-50.34,50.35a8,8,0,0,1-11.32,0L104,131.31l-40,40V176H200a8,8,0,0,1,0,16Z"></path></svg>

                </div>
                <strong class="features-title">High Earnings</strong>
                <span class="features-details">Get paid more than other platforms. Our users earn up to ₦50,000 per day with consistent effort.</span>
            </div>
             <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM169.66,133.66l-48,48a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L116,164.69l42.34-42.35a8,8,0,0,1,11.32,11.32ZM48,80V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80Z"></path></svg>



                </div>
                <strong class="features-title">Simple Tasks</strong>
                <span class="features-details">Complete easy tasks like watching videos, testing apps, or clicking ads to earn Naira instantly.</span>
            </div>
            <div data-class="trans-up" class="features-card observe">
                <div class="symbol">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M213.85,125.46l-112,120a8,8,0,0,1-13.69-7l14.66-73.33L45.19,143.49a8,8,0,0,1-3-13l112-120a8,8,0,0,1,13.69,7L153.18,90.9l57.63,21.61a8,8,0,0,1,3,12.95Z"></path></svg>



                </div>
                <strong class="features-title">Instant Withdrawals</strong>
                <span class="features-details">Withdraw your earnings instantly via bank transfer, airtime, or gift cards with no hidden fees.</span>
            </div>
              
            
           
            
        </div>
@if (!$categories->isEmpty())
    
           <span class="hero-title">Types of Tasks available</span>
        <span class="text-center">Choose from a variety of tasks that match your interests and schedule.</span>
        <div class="grid p-20 pc-grid-2 w-full g-10">
          @foreach ($categories as $data)
                <div data-class="trans-up" class="features-card observe">
             <img src="{{ asset('categories/'.$data->icon.'') }}" alt="" class="h-70 perfect-square circle no-shrink">
                <strong class="features-title">{{ $data->name }}</strong>
                <span class="features-details">{{ nl2br($data->note ?? '') }}</span>
            </div>
          @endforeach
           
        
              
            
           
            
        </div>

       
@endif
      
       
         {{-- <div class="column m-x-auto m-top-50 text-center g-10 w-full">
            <strong class="hero-title">Frequently Asked Questions</strong>
            <span style="color:silver;">Find quick and clear answers to the most common questions about {{ config('app.name') }}</span>
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How Do I Join {{ config('app.name') }}</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
                  <span>  To get started on {{ config('app.name') }},</span>
                  <span>- Click on the `Get Started` button at the top of the page or follow this <a href="{{ url('register') }}" class="no-u bold" style="color:greenyellow">Link</a></span>
                  <span>- Fill the form with your enrollment details</span>
                  <span>- Message any of our verified vendors to purchase your coupon code/access key</span>
                 <span>- We value your privacy so your data are end-to-end encrypted and 100% safe on {{ config('app.name') }}</span>
                </div>
            </div>
            
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">Are Non-Affiliates paid on {{ config('app.name') }}</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
                 Yes, Non-Affiliate users on {{ config('app.name') }} are paid for their daily activities completed on the platform,subjust to the platform's payment terms and thresholds.
                </div>
            </div>
            


            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How do i earn on {{ config('app.name') }}</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
               You can earn money on {{ config('app.name') }} by completing a variety of activities like tasks, stream, article writing, content monetization etc <br>
               You can also earn money by sharing your affiliate link to your friends and families and earn on each complete signup.
                </div>
            </div>
             
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How long is my withdrawal on {{ config('app.name') }} processed</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
              Withdrawals on {{ config('app.name') }} are typically processed within 1-24 hours depending on the load of withdrawals availble to process.
                </div>
            </div>
        </div> --}}
         {{-- <img src="{{ asset('banners/72a5e007-4da6-46d2-853d-eafccff05b9f.jpeg') }}" alt="" class="w-full m-x-auto br-10 max-w-500"> --}}
        
    </section>
@endsection
@section('js')
    <script class="js">
        function ObserveItems(class_name){
            let observer=new IntersectionObserver((entries)=>{
                entries.forEach((entry)=>{
                    if(entry.isIntersecting){
                        entry.target.classList.add(entry.target.dataset.class);
                    }else{
                        entry.target.classList.remove(entry.target.dataset.class);
                    }
                });
            },{
                threshold : 0
            });
            let items=document.querySelectorAll('.' + class_name);
           items.forEach((item)=>{
             observer.observe(item);
           })
        }
        window.onload=function(){
            document.querySelector('.happy-users').style.minWidth=document.querySelector('.happy-users').getBoundingClientRect().height + 'px'
        }
        ObserveItems('observe');
    </script>
@endsection
