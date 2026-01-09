@extends('layout.users.app')
@section('title')
    Dashboard
@endsection
@section('css')
    <style class="css">
        .quick-link{
            position:relative;
            border:1px solid var(--primary) !important
            

        }
        .quick-link .group{
            z-index:20;
            position:relative;
        }
        .quick-link::before{
            content:'';
            position:absolute;
            left:10%;
            top:10%;
            width:40%;
            height:40%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(30px);
            z-index:10;
        }
         .quick-link::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            width:20%;
            height:20%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(20px);
            z-index:10;
        }
        .populate.shown .form{
            animation:opaq-in 0.5s ease forwards;
            
        }
        .affiliate-balance-div{
            background:rgb(108,92,230);
            position:relative;
            color:white;
        }
          .activities-balance-div{
            background:#4caf50;
            position:relative;
            color:white;
        }
        .show-balance-text,.hide-balance-text{
            color:inherit !important;
        }

        .all-time-balance-div{
            background:rgb(108,92,230);
            position:relative;
            color:white;
        }
          .activities-balance-div .balance-name{
           
            color:white;
            opacity:0.8;
        }
         .all-time-balance-div .balance-name{
           
            color:whitesmoke;
        }
        
      .rep-img{
            position:absolute;
            bottom:0;
            right:0;
        }
        .rep-img{
            height:150px;
            pointer-events:none;
            z-index:200;
        }
        .balance-divs{
            overflow: hidden;
            /* clip-path:inset(0 round 20px); */
        }
        .balance-divs.affiliate-balance-div::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            background:white;
            filter:blur(50px);
            --webkit-filter:blur(50px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-divs.activities-balance-div::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            background:white;
            filter:blur(50px);
            --webkit-filter:blur(50px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-divs.all-time-balance-div::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            background:white;
            filter:blur(50px);
            --webkit-filter:blur(50px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-name{
            color:white;
            opacity:0.8;
        }
        .balance-divs .content{
            position:relative;
            z-index:300;
        }
        .balance-display.balance-hidden .balance{
            display:none !important;
        }
         .balance-display.balance-hidden .star{
            display:flex !important;
        }
        .balance-display.balance-shown .balance{
            display:flex !important;
        }
         .balance-display.balance-shown .star{
            display:none !important;
        }
        .balance-display.balance-hidden .hide-balance-text{
            display:none !important;
        }
        .balance-display.balance-hidden .show-balance-text{
            display:flex !important;
        }
        .balance-display.balance-shown .hide-balance-text{
            display:flex !important;
        }
        .balance-display.balance-shown .show-balance-text{
            display:none !important;
        }
        .wallets{
            position:absolute;
            top:100%;
            height:20px;
        }
        .wallets.activities{
            background:gold;
            border-radius:0 0 10px 10px;
             left:5%;
            right:5%;
            z-index:200;
        }
        .wallets.affiliate{
            background:var(--primary);
            border-radius:0 0 10px 10px;
             left:5%;
            right:5%;
            z-index:200;
        }
        .wallets.all_time{
            background:rgb(108,92,230);
             border-radius:0 0 10px 10px;
              left:8%;
            right:8%;
             height:30px;
             z-index:100;
        }
        .quick-link{
            position:relative;
            overflow:hidden;
            border:1px solid var(--bg-lighter);
            text-align: center;
        }
        .quick-link .content{
            position:relative;
            z-index:20;
            text-align: center;

        }  
       
      .quick-link::before{
        content:'';
        position:absolute;
        top:0;
        right:0;
        left:calc(100% - 50%);
        background:var(--primary-light);
        filter:blur(20px);
        -webkit-filter:blur(20px);
        height:50%;
        width:50%;
        z-index:10
      }
        .chat-btn{
            width:100%;
            height:fit-content;
            background:linear-gradient(to top right,greenyellow,#4caf50,green);
            padding:10px;
            border:none;
            user-select:none;
            color:white;
            font-family:var(--font);
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:center;
            clip-path:inset(0 round 5px);
            border-radius:5px;
            gap:5px;
            cursor:pointer;
        }
         
        @keyframes opaq-in{
            0%{
                opacity:0;
                transform:scale(0.9)
            }
            100%{
                opacity:1;
                transform:scale(1);
            }
        }
        .promo-img{
            position:fixed;
            right:10px;
            height:70px;
            animation:breathe 2.5s ease infinite;

            
        }
        @keyframes breathe{
            0%{
                transform: scale(1)
            }
            50%{
                transform: scale(0.9)
            }
        }
        .ref-link{
            border:1px solid var(--primary) !important;
            border-radius:5px !important;
        }
    </style>
@endsection
@section('main')
    <section class="column p-10 w-full g-10">
     <div class="w-full g-5 column">
         <div onclick="
      
        this.outerHTML=document.querySelector('template.affiliate-wallet').innerHTML;
      
        " class="pos-relative balance-houses w-full">
        <div class="w-full br-10  p-20 column no-select g-10 balance-divs activities-balance-div">
        <div class="column w-full content g-10">
                 <div class="row g-5">
            <div>Welcome back 👋,<br><strong class="desc"> {{ ucfirst(strtolower(Auth::guard('users')->user()->username)) }}</strong></div>
           <div class="row display-none align-center m-left-auto g-10">
             <div style="background:goldenrod" class="p-10 align-center column br-5 g-5">
                <span>Earnings today</span>
                <strong>{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format($activities_earnings_today,2) }}</strong>
            </div>
             <div style="background:black;color:white;" class="p-10 align-center column br-5 g-5">
                <span>Withdrawals</span>
                <strong>{{ number_format($activities_withdrawals_this_month) }} this Month</strong>
            </div>
           </div>
        </div>
        <div class="column balance-display balance-shown g-5 m-top-auto">
            <span class="balance-name">Earning Balance</span>
            <strong style="font-size:2rem;" class="desc balance">{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format(Auth::guard('users')->user()->activities_balance,2) }}</strong>
             <strong style="font-size:2rem;" class="desc star">******</strong>
            <div onclick="
             event.stopPropagation();
if(this.closest('.balance-display').classList.contains('balance-hidden')){
            this.closest('.balance-display').classList.remove('balance-hidden');
            this.closest('.balance-display').classList.add('balance-shown');
            }else{
             this.closest('.balance-display').classList.remove('balance-shown');
             this.closest('.balance-display').classList.add('balance-hidden');
           
            }
            " class="row align-center g-5">
                <div class="row align-center hide-balance-text g-5">
                    <span>Hide Balance</span>
                     <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.2954 6.31064C22.6761 6.4738 22.8525 6.91471 22.6893 7.29543L22 6.99999C22.6893 7.29543 22.6894 7.29526 22.6893 7.29543L22.6886 7.29711L22.6875 7.2996L22.6843 7.30696L22.6737 7.33103C22.6647 7.35117 22.6519 7.37938 22.6353 7.41507C22.602 7.48642 22.5533 7.58774 22.4889 7.71415C22.36 7.9668 22.1676 8.32067 21.9085 8.73646C21.4829 9.4195 20.8724 10.2776 20.062 11.1302L21.0303 12.0985C21.3232 12.3914 21.3232 12.8663 21.0303 13.1592C20.7374 13.4521 20.2625 13.4521 19.9697 13.1592L18.9691 12.1586C18.3094 12.7113 17.5529 13.23 16.6951 13.6562L17.6286 15.091C17.8545 15.4381 17.7562 15.9027 17.409 16.1286C17.0618 16.3545 16.5973 16.2562 16.3713 15.909L15.2822 14.2351C14.5028 14.4896 13.659 14.6626 12.75 14.7246V16.5C12.75 16.9142 12.4142 17.25 12 17.25C11.5858 17.25 11.25 16.9142 11.25 16.5V14.7246C10.369 14.6645 9.54916 14.5002 8.78989 14.2584L7.71581 15.9091C7.48991 16.2563 7.02532 16.3546 6.67813 16.1287C6.33095 15.9028 6.23263 15.4382 6.45853 15.091L7.37095 13.6888C6.50657 13.2666 5.74387 12.7502 5.07848 12.1983L4.1175 13.1592C3.82461 13.4521 3.34974 13.4521 3.05684 13.1592C2.76395 12.8663 2.76395 12.3915 3.05684 12.0986L3.98061 11.1748C3.15605 10.3151 2.53531 9.44655 2.10283 8.75466C1.8399 8.33403 1.64466 7.97564 1.51394 7.71968C1.44854 7.59162 1.39916 7.48894 1.36543 7.41663C1.34856 7.38047 1.33559 7.35188 1.32648 7.33148L1.31568 7.30709L1.31244 7.29964L1.31135 7.29713L1.31095 7.29618C1.31087 7.296 1.31063 7.29543 1.99998 6.99999L1.31095 7.29618C1.14778 6.91546 1.32382 6.4738 1.70455 6.31064C2.08495 6.1476 2.52545 6.32354 2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361L2.6899 6.70581L2.69597 6.71952C2.70186 6.73271 2.71146 6.7539 2.72479 6.78247C2.75145 6.83963 2.79302 6.92624 2.84982 7.03747C2.96351 7.26009 3.13768 7.58027 3.37479 7.95959C3.85039 8.72047 4.57163 9.70708 5.55567 10.6216C6.42157 11.4263 7.48265 12.1676 8.75171 12.6558C9.7062 13.023 10.7854 13.25 12 13.25C13.2417 13.25 14.3421 13.0128 15.3125 12.6308C16.5739 12.1343 17.6277 11.3882 18.4867 10.582C19.4562 9.67196 20.1669 8.69515 20.6354 7.9432C20.869 7.5683 21.0406 7.25226 21.1526 7.03266C21.2086 6.92295 21.2495 6.83756 21.2758 6.78124C21.2889 6.75309 21.2983 6.73222 21.3041 6.71923L21.3101 6.70575L21.3106 6.70455C21.3107 6.70446 21.3106 6.70465 21.3106 6.70455M22.2954 6.31064C21.9148 6.14751 21.4739 6.32404 21.3106 6.70455ZM2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361Z" fill="CurrentColor"></path>
</svg>
               
                </div>
                 <div class="row align-center show-balance-text g-5">
                    <span>Show Balance</span>
               <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z" fill="CurrentColor"></path>
</svg>

                </div>

            </div>
        </div>
        <div class="align-center m-top-20 row g-10">
            <div onclick="event.stopPropagation();spa(event,'{{ url('users/withdraw') }}')" style="background:white;color:#4caf50" class="w-fit p-5 text-average p-x-20 br-1000">Withdraw</div>
            <div onclick="event.stopPropagation();spa(event,'{{ url('users/transactions') }}')" style="background:transparent;color:white;border:1px solid white;" class="w-fit p-5 text-average p-x-20 br-1000">Transactions</div>
        </div>
        </div>

        <img style="right:10%;" src="{{ asset('images/IMG_2550.png') }}" class="rep-img" alt="">
       </div>
{{-- WALLETS --}}
       <div style="background:rgb(108,92,230)" class="wallets activities"></div>
     
       </div>


       {{-- TEMPLATES --}}
       {{-- AFFILIATE BALANCE  TEMPLATE--}}
      <template class="affiliate-wallet">
        <div onclick="
      
        this.outerHTML=document.querySelector('template.activities-wallet').innerHTML;
      
        " class="pos-relative balance-houses w-full">
        <div class="w-full br-10  p-20 column no-select g-10 balance-divs affiliate-balance-div">
        <div class="column w-full content g-10">
                 <div class="row g-5">
            <div>Welcome back 👋,<br><strong class="desc"> {{ ucfirst(strtolower(Auth::guard('users')->user()->username)) }}</strong></div>
           <div class="row display-none align-center m-left-auto g-10">
             <div style="background:rgba(0,255,255,0.2)" class="p-10 align-center column br-5 g-5">
                <span>Earnings today</span>
                <strong>{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format($affiliate_earnings_today,2) }}</strong>
            </div>
             <div style="background:black;color:white;" class="p-10 align-center column br-5 g-5">
                <span>Withdrawals</span>
                <strong>{{ number_format($affiliate_withdrawals_this_month) }} this Month</strong>
            </div>
           </div>
        </div>
        <div class="column balance-display balance-shown g-5 m-top-auto">
            <span class="balance-name">Referral Balance</span>
            <strong style="font-size:2rem;" class="desc balance">{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format(Auth::guard('users')->user()->affiliate_balance,2) }}</strong>
             <strong style="font-size:2rem;" class="desc star">******</strong>
            <div onclick="
             event.stopPropagation();
if(this.closest('.balance-display').classList.contains('balance-hidden')){
            this.closest('.balance-display').classList.remove('balance-hidden');
            this.closest('.balance-display').classList.add('balance-shown');
            }else{
             this.closest('.balance-display').classList.remove('balance-shown');
             this.closest('.balance-display').classList.add('balance-hidden');
           
            }
            " class="row align-center g-5">
                <div class="row align-center hide-balance-text g-5">
                    <span>Hide Balance</span>
                     <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.2954 6.31064C22.6761 6.4738 22.8525 6.91471 22.6893 7.29543L22 6.99999C22.6893 7.29543 22.6894 7.29526 22.6893 7.29543L22.6886 7.29711L22.6875 7.2996L22.6843 7.30696L22.6737 7.33103C22.6647 7.35117 22.6519 7.37938 22.6353 7.41507C22.602 7.48642 22.5533 7.58774 22.4889 7.71415C22.36 7.9668 22.1676 8.32067 21.9085 8.73646C21.4829 9.4195 20.8724 10.2776 20.062 11.1302L21.0303 12.0985C21.3232 12.3914 21.3232 12.8663 21.0303 13.1592C20.7374 13.4521 20.2625 13.4521 19.9697 13.1592L18.9691 12.1586C18.3094 12.7113 17.5529 13.23 16.6951 13.6562L17.6286 15.091C17.8545 15.4381 17.7562 15.9027 17.409 16.1286C17.0618 16.3545 16.5973 16.2562 16.3713 15.909L15.2822 14.2351C14.5028 14.4896 13.659 14.6626 12.75 14.7246V16.5C12.75 16.9142 12.4142 17.25 12 17.25C11.5858 17.25 11.25 16.9142 11.25 16.5V14.7246C10.369 14.6645 9.54916 14.5002 8.78989 14.2584L7.71581 15.9091C7.48991 16.2563 7.02532 16.3546 6.67813 16.1287C6.33095 15.9028 6.23263 15.4382 6.45853 15.091L7.37095 13.6888C6.50657 13.2666 5.74387 12.7502 5.07848 12.1983L4.1175 13.1592C3.82461 13.4521 3.34974 13.4521 3.05684 13.1592C2.76395 12.8663 2.76395 12.3915 3.05684 12.0986L3.98061 11.1748C3.15605 10.3151 2.53531 9.44655 2.10283 8.75466C1.8399 8.33403 1.64466 7.97564 1.51394 7.71968C1.44854 7.59162 1.39916 7.48894 1.36543 7.41663C1.34856 7.38047 1.33559 7.35188 1.32648 7.33148L1.31568 7.30709L1.31244 7.29964L1.31135 7.29713L1.31095 7.29618C1.31087 7.296 1.31063 7.29543 1.99998 6.99999L1.31095 7.29618C1.14778 6.91546 1.32382 6.4738 1.70455 6.31064C2.08495 6.1476 2.52545 6.32354 2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361L2.6899 6.70581L2.69597 6.71952C2.70186 6.73271 2.71146 6.7539 2.72479 6.78247C2.75145 6.83963 2.79302 6.92624 2.84982 7.03747C2.96351 7.26009 3.13768 7.58027 3.37479 7.95959C3.85039 8.72047 4.57163 9.70708 5.55567 10.6216C6.42157 11.4263 7.48265 12.1676 8.75171 12.6558C9.7062 13.023 10.7854 13.25 12 13.25C13.2417 13.25 14.3421 13.0128 15.3125 12.6308C16.5739 12.1343 17.6277 11.3882 18.4867 10.582C19.4562 9.67196 20.1669 8.69515 20.6354 7.9432C20.869 7.5683 21.0406 7.25226 21.1526 7.03266C21.2086 6.92295 21.2495 6.83756 21.2758 6.78124C21.2889 6.75309 21.2983 6.73222 21.3041 6.71923L21.3101 6.70575L21.3106 6.70455C21.3107 6.70446 21.3106 6.70465 21.3106 6.70455M22.2954 6.31064C21.9148 6.14751 21.4739 6.32404 21.3106 6.70455ZM2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361Z" fill="CurrentColor"></path>
</svg>
               
                </div>
                 <div class="row align-center show-balance-text g-5">
                    <span>Show Balance</span>
               <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z" fill="CurrentColor"></path>
</svg>

                </div>

            </div>
        </div>
        <div class="align-center m-top-20 row g-10">
            <div onclick="event.stopPropagation();spa(event,'{{ url('users/withdraw') }}')" style="background:white;color:rgb(108,92,230)" class="w-fit p-5 text-average p-x-20 br-1000">Withdraw</div>
            <div onclick="event.stopPropagation();spa(event,'{{ url('users/transactions') }}')" style="background:transparent;color:white;border:1px solid white;" class="w-fit p-5 text-average p-x-20 br-1000">Transactions</div>
        </div>
        </div>

        <img src="{{ asset('images/IMG_2551.png') }}" class="rep-img" alt="">
       </div>
{{-- WALLETS --}}
    <div style="background:#4caf50;" class="wallets activities"></div>
    
       </div>
      </template>
      
{{-- ACTIVITIES BALANCE TEMPLATE --}}
      <template class="activities-wallet">
          <div onclick="
      
        this.outerHTML=document.querySelector('template.affiliate-wallet').innerHTML;
      
        " class="pos-relative balance-houses w-full">
        <div class="w-full br-10  p-20 column no-select g-10 balance-divs activities-balance-div">
        <div class="column w-full content g-10">
                 <div class="row g-5">
            <div>Welcome back 👋,<br><strong class="desc"> {{ ucfirst(strtolower(Auth::guard('users')->user()->username)) }}</strong></div>
           <div class="row display-none align-center m-left-auto g-10">
             <div style="background:goldenrod" class="p-10 align-center column br-5 g-5">
                <span>Earnings today</span>
                <strong>{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format($activities_earnings_today,2) }}</strong>
            </div>
             <div style="background:black;color:white;" class="p-10 align-center column br-5 g-5">
                <span>Withdrawals</span>
                <strong>{{ number_format($activities_withdrawals_this_month) }} this Month</strong>
            </div>
           </div>
        </div>
        <div class="column balance-display balance-shown g-5 m-top-auto">
            <span class="balance-name">Earning Balance</span>
            <strong style="font-size:2rem;" class="desc balance">{{ Currency(Auth::guard('users')->user()->id) }}{{ number_format(Auth::guard('users')->user()->activities_balance,2) }}</strong>
             <strong style="font-size:2rem;" class="desc star">******</strong>
            <div onclick="
             event.stopPropagation();
if(this.closest('.balance-display').classList.contains('balance-hidden')){
            this.closest('.balance-display').classList.remove('balance-hidden');
            this.closest('.balance-display').classList.add('balance-shown');
            }else{
             this.closest('.balance-display').classList.remove('balance-shown');
             this.closest('.balance-display').classList.add('balance-hidden');
           
            }
            " class="row align-center g-5">
                <div class="row align-center hide-balance-text g-5">
                    <span>Hide Balance</span>
                     <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.2954 6.31064C22.6761 6.4738 22.8525 6.91471 22.6893 7.29543L22 6.99999C22.6893 7.29543 22.6894 7.29526 22.6893 7.29543L22.6886 7.29711L22.6875 7.2996L22.6843 7.30696L22.6737 7.33103C22.6647 7.35117 22.6519 7.37938 22.6353 7.41507C22.602 7.48642 22.5533 7.58774 22.4889 7.71415C22.36 7.9668 22.1676 8.32067 21.9085 8.73646C21.4829 9.4195 20.8724 10.2776 20.062 11.1302L21.0303 12.0985C21.3232 12.3914 21.3232 12.8663 21.0303 13.1592C20.7374 13.4521 20.2625 13.4521 19.9697 13.1592L18.9691 12.1586C18.3094 12.7113 17.5529 13.23 16.6951 13.6562L17.6286 15.091C17.8545 15.4381 17.7562 15.9027 17.409 16.1286C17.0618 16.3545 16.5973 16.2562 16.3713 15.909L15.2822 14.2351C14.5028 14.4896 13.659 14.6626 12.75 14.7246V16.5C12.75 16.9142 12.4142 17.25 12 17.25C11.5858 17.25 11.25 16.9142 11.25 16.5V14.7246C10.369 14.6645 9.54916 14.5002 8.78989 14.2584L7.71581 15.9091C7.48991 16.2563 7.02532 16.3546 6.67813 16.1287C6.33095 15.9028 6.23263 15.4382 6.45853 15.091L7.37095 13.6888C6.50657 13.2666 5.74387 12.7502 5.07848 12.1983L4.1175 13.1592C3.82461 13.4521 3.34974 13.4521 3.05684 13.1592C2.76395 12.8663 2.76395 12.3915 3.05684 12.0986L3.98061 11.1748C3.15605 10.3151 2.53531 9.44655 2.10283 8.75466C1.8399 8.33403 1.64466 7.97564 1.51394 7.71968C1.44854 7.59162 1.39916 7.48894 1.36543 7.41663C1.34856 7.38047 1.33559 7.35188 1.32648 7.33148L1.31568 7.30709L1.31244 7.29964L1.31135 7.29713L1.31095 7.29618C1.31087 7.296 1.31063 7.29543 1.99998 6.99999L1.31095 7.29618C1.14778 6.91546 1.32382 6.4738 1.70455 6.31064C2.08495 6.1476 2.52545 6.32354 2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361L2.6899 6.70581L2.69597 6.71952C2.70186 6.73271 2.71146 6.7539 2.72479 6.78247C2.75145 6.83963 2.79302 6.92624 2.84982 7.03747C2.96351 7.26009 3.13768 7.58027 3.37479 7.95959C3.85039 8.72047 4.57163 9.70708 5.55567 10.6216C6.42157 11.4263 7.48265 12.1676 8.75171 12.6558C9.7062 13.023 10.7854 13.25 12 13.25C13.2417 13.25 14.3421 13.0128 15.3125 12.6308C16.5739 12.1343 17.6277 11.3882 18.4867 10.582C19.4562 9.67196 20.1669 8.69515 20.6354 7.9432C20.869 7.5683 21.0406 7.25226 21.1526 7.03266C21.2086 6.92295 21.2495 6.83756 21.2758 6.78124C21.2889 6.75309 21.2983 6.73222 21.3041 6.71923L21.3101 6.70575L21.3106 6.70455C21.3107 6.70446 21.3106 6.70465 21.3106 6.70455M22.2954 6.31064C21.9148 6.14751 21.4739 6.32404 21.3106 6.70455ZM2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361Z" fill="CurrentColor"></path>
</svg>
               
                </div>
                 <div class="row align-center show-balance-text g-5">
                    <span>Show Balance</span>
               <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z" fill="CurrentColor"></path>
</svg>

                </div>

            </div>
        </div>
        <div class="align-center m-top-20 row g-10">
            <div onclick="event.stopPropagation();spa(event,'{{ url('users/withdraw') }}')" style="background:white;color:#4caf50" class="w-fit p-5 text-average p-x-20 br-1000">Withdraw</div>
            <div onclick="event.stopPropagation();spa(event,'{{ url('users/transactions') }}')" style="background:transparent;color:white;border:1px solid white;" class="w-fit p-5 text-average p-x-20 br-1000">Transactions</div>
        </div>
        </div>

        <img style="right:10%;" src="{{ asset('images/IMG_2550.png') }}" class="rep-img" alt="">
       </div>
{{-- WALLETS --}}
       <div style="background:rgb(108,92,230)" class="wallets activities"></div>
     
       </div>
      </template>

     
       {{-- TEMPLATES END --}}
   
   
     </div>
{{-- MARGINALIZE --}}
    <div class="marginalize"></div>
   {{-- QUICK LINKS --}}
       <strong class="desc">Quick Links</strong>
       <section style="padding-top:5px;" class="grid quick-links p-20 grid-4 w-full place-center g-10">
        <div onclick="spa(event,'{{ url('users/bank/add') }}')" class="column bg-light g-10 br-10 justify-center w-full perfect-square quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(0,255,0,0.3);color:#4caf50;" class=" h-40 w-40 br-10 justify-center column">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208ZM16.3,98.18a8,8,0,0,1,3.51-9l104-64a8,8,0,0,1,8.38,0l104,64A8,8,0,0,1,232,104H208v64h16a8,8,0,0,1,0,16H32a8,8,0,0,1,0-16H48V104H24A8,8,0,0,1,16.3,98.18ZM144,160a8,8,0,0,0,16,0V112a8,8,0,0,0-16,0Zm-48,0a8,8,0,0,0,16,0V112a8,8,0,0,0-16,0Z"></path></svg>

            </div>
            <strong>Bank Details</strong>
           </div>
        </div>
        {{-- NEW QUICK LINK --}}
          <div onclick="spa(event,'{{ url('users/team') }}')" class="column bg-light g-10 br-10 justify-center w-full perfect-square quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(0,0,255,0.1);color:blue;" class=" h-40 w-40 br-10 justify-center column">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z" fill="CurrentColor"></path>
<path d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z" fill="CurrentColor"></path>
<path d="M7.12205 5C7.29951 5 7.47276 5.01741 7.64005 5.05056C7.23249 5.77446 7 6.61008 7 7.5C7 8.36825 7.22131 9.18482 7.61059 9.89636C7.45245 9.92583 7.28912 9.94126 7.12205 9.94126C5.70763 9.94126 4.56102 8.83512 4.56102 7.47063C4.56102 6.10614 5.70763 5 7.12205 5Z" fill="CurrentColor"></path>
<path d="M5.44734 18.986C4.87942 18.3071 4.5 17.474 4.5 16.5C4.5 15.5558 4.85657 14.744 5.39578 14.0767C3.4911 14.2245 2 15.2662 2 16.5294C2 17.8044 3.5173 18.8538 5.44734 18.986Z" fill="CurrentColor"></path>
<path d="M16.9999 7.5C16.9999 8.36825 16.7786 9.18482 16.3893 9.89636C16.5475 9.92583 16.7108 9.94126 16.8779 9.94126C18.2923 9.94126 19.4389 8.83512 19.4389 7.47063C19.4389 6.10614 18.2923 5 16.8779 5C16.7004 5 16.5272 5.01741 16.3599 5.05056C16.7674 5.77446 16.9999 6.61008 16.9999 7.5Z" fill="CurrentColor"></path>
<path d="M18.5526 18.986C20.4826 18.8538 21.9999 17.8044 21.9999 16.5294C21.9999 15.2662 20.5088 14.2245 18.6041 14.0767C19.1433 14.744 19.4999 15.5558 19.4999 16.5C19.4999 17.474 19.1205 18.3071 18.5526 18.986Z" fill="CurrentColor"></path>
</svg>


            </div>
            <strong>My Team</strong>
           </div>
        </div>
         {{-- NEW QUICK LINK --}}
          <div onclick="spa(event,'{{ url('users/transactions') }}')" class="column bg-light g-10 br-10 justify-center w-full perfect-square quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(0, 0, 0, 0.1);color:rgb(0,0, 0);" class=" h-40 w-40 br-10 justify-center column">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M216,40H40A16,16,0,0,0,24,56V208a8,8,0,0,0,11.58,7.15L64,200.94l28.42,14.21a8,8,0,0,0,7.16,0L128,200.94l28.42,14.21a8,8,0,0,0,7.16,0L192,200.94l28.42,14.21A8,8,0,0,0,232,208V56A16,16,0,0,0,216,40ZM176,144H80a8,8,0,0,1,0-16h96a8,8,0,0,1,0,16Zm0-32H80a8,8,0,0,1,0-16h96a8,8,0,0,1,0,16Z"></path></svg>




            </div>
            <strong>Transactions</strong>
           </div>
        </div>
         {{-- NEW QUICK LINK --}}
          <div onclick="spa(event,'{{ url('users/tasks') }}')" class="column bg-light g-10 br-10 justify-center w-full perfect-square quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(255, 0, 234, 0.1);color:rgb(255, 0, 221);" class=" h-40 w-40 br-10 justify-center column">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM169.66,133.66l-48,48a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L116,164.69l42.34-42.35a8,8,0,0,1,11.32,11.32ZM48,80V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80Z"></path></svg>
           



            </div>
            <strong>Tasks</strong>
           </div>
        </div>
       </section>
       <div style="border:1px solid var(--primary)" class="w-full no-select m-x-auto align-center p-20 column g-5 bg-light br-10 p-10">
                <strong class="font-1 m-x-auto row">Our official links</strong>
              
       <div class="grid place-center m-left-auto w-full g-10 align-center">
       <div class="grid grid-2 w-full g-10">
         <div onclick="window.open('{{ $social->whatsapp_ads }}')" class="bg-green g-5 align-center pc-max-w-half c-white row justify-center h-50 p-10 bold w-full br-1000">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M152.58,145.23l23,11.48A24,24,0,0,1,152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-40,24a8,8,0,0,0-4.42-7.16l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88A40,40,0,0,0,192,152Z"></path></svg>
            Place Ads
        </div>
         <div onclick="window.open('{{ $social->telegram_ads }}')" style="box-shadow:inset 0 0 20px navy;background:blue" class="bg-navy g-5 align-center pc-max-w-half m-right-auto c-white row justify-center h-50 p-10 bold w-full br-1000">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M228.88,26.19a9,9,0,0,0-9.16-1.57L17.06,103.93a14.22,14.22,0,0,0,2.43,27.21L72,141.45V200a15.92,15.92,0,0,0,10,14.83,15.91,15.91,0,0,0,17.51-3.73l25.32-26.26L165,220a15.88,15.88,0,0,0,10.51,4,16.3,16.3,0,0,0,5-.79,15.85,15.85,0,0,0,10.67-11.63L231.77,35A9,9,0,0,0,228.88,26.19ZM175.53,208,92.85,135.5l119-85.29Z"></path></svg>

            Place Ads
        </div>
          <div onclick="window.open('{{ $social->whatsapp }}')" style="background:rgb(102, 255, 0);color:black !important;" class="bg-green g-5 align-center pc-max-w-half c-white row justify-center h-50 p-10 bold w-full br-1000">
          Join Whatsapp Group
        </div>
         <div onclick="window.open('{{ $social->telegram }}')" style="background:aqua;color:navy !important;" class="bg-navy g-5 align-center pc-max-w-half m-right-auto c-white row justify-center h-50 p-10 bold w-full br-1000">
       Join Telegram Group
        </div>
       </div>
       </div>
        </div>
       <strong class="desc">Referral Link</strong>
        <div style="border:1px solid var(--bg-lighter)" class="w-full bg-light ref-link g-5 br-0 p-10 row space-between align-center">
            <div class="w-full h-40 no-scrollbar align-center row ws-nowrap overflow-auto p-5 br-10 bg-secondary-transparent">{{ url('register/'.Auth::guard('users')->user()->username.'') }}</div>
            <div onclick="copy('{{ url('register/'.Auth::guard('users')->user()->username.'') }}')" style="border:1px solid var(--bg-lighter)" class="h-40 perfect-square column justify-center">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M200,32H163.74a47.92,47.92,0,0,0-71.48,0H56A16,16,0,0,0,40,48V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V48A16,16,0,0,0,200,32Zm-72,0a32,32,0,0,1,32,32H96A32,32,0,0,1,128,32Z"></path></svg>

            </div>
        </div>
        
        
    
      
    </section>
  @include('components.sections',[
    'populate' => true
  ])
  {{-- <img onclick="spa(event,'{{ url('users/referral/contest') }}')" src="{{ asset('images/IMG_1613.PNG') }}" class="promo-img" alt=""> --}}
@endsection
@section('popup')
    <div class="column p-10 g-10">
        <img src="{{ asset('banners/eb4c53bd-8a10-47f0-8570-a43582d1b9eb.jpeg') }}" alt="" class="w-full br-10">
    <div class=" bold text-center w-full">
        {!! nl2br($social->notification) !!}
         </div>
         <div class="w-full chat-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="CurrentColor" viewBox="0 0 256 256"><path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path></svg>





                        <span>Join our Whatsapp Group</span>
         </div>
    </div>
@endsection
@section('js')
    <script class="js">
     
        window.MyFunc ={
           Style : function(){
           try{
            document.querySelectorAll('.balance-divs').forEach((div)=>{
            
                div.style.minHeight=div.querySelector('.rep-img').getBoundingClientRect().height + 'px';
            })
            // document.querySelector('.promo-img').style.bottom=Math.abs(document.querySelector('footer').getBoundingClientRect().top - document.querySelector('footer').getBoundingClientRect().bottom) + 10 + 'px';
          //  alert(Math.abs(document.querySelector('footer').getBoundingClientRect().top - document.querySelector('footer').getBoundingClientRect().bottom) + 10 + 'px')
         //   alert(document.querySelectorAll('.wallets')[document.querySelectorAll('.wallets').length - 1].getBoundingClientRect().bottom)
            document.querySelector('.marginalize').style.marginTop=Math.abs(document.querySelectorAll('.wallets')[0].getBoundingClientRect().top - document.querySelectorAll('.wallets')[document.querySelectorAll('.wallets').length - 1].getBoundingClientRect().bottom) + 'px' 
           

           }catch(error){
            alert(error.stack);
           }
           } ,
           Redeemed : function(response,event){
            let data=JSON.parse(response);
          
            document.querySelector('.prompt.' + data.status).innerHTML=(data.message).toUpperCase();
           document.querySelector('.prompt.' + data.status).classList.remove('display-none');
           if(data.status == 'success'){
            document.querySelector('.close-modal').onclick=function(){
                spa(event,'{{ url()->current() }}');
            }
           }else{
              document.querySelector('.close-modal').onclick=function(){
                document.querySelector('.populate').classList.add('display-none');
                 document.querySelector('.populate').classList.remove('shown');
            document.body.classList.remove('overflow-hidden')
            }
            
           }

           }
        }
        MyFunc.Style();
    </script>
@endsection