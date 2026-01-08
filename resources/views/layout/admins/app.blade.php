<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png?v=1.1') }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg?v=1.1') }}" />
<link rel="shortcut icon" href="{{ asset('favicon/favicon.ico?v=1.1') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png?v=1.1') }}" />
<link rel="manifest" href="{{ asset('favicon/site.webmanifest?v=1.1') }}" />
<link rel="stylesheet" href="{{ asset('vitecss/fonts/fonts.css?v='.config('versions.vite_version').'') }}">
<link rel="stylesheet" href="{{ asset('vitecss/css/app.css?v='.config('versions.vite_version').'') }}">
    <title>{{ config('app.name') }} | Admins | @yield('title')</title>
    <style>
      :root{
        --text:black;
        --primary:rgb(108,92,230);
      }
      .border-color-bg{
      border-color:black;
      }
      .nav-profile{
        background: var(--primary) !important;
        color:var(--primary-text);
      }
      @media(min-width:800px){
        nav{
            width:30%;
           
        }
        nav section.nav{
            width:100%;
            border-right:1px solid var(--bg)
        }
        main,footer,header{
            width:calc(100% - 30%) !important;
           
            margin-left:30%;
        }
      }
      header{
        left:30% !important;
      }
    </style>
     <style>
    .notification-icon {
      position: relative;
      display: inline-block;
      width: 25px;
      height: 25px;
    
    }
    
    .bell-icon {
      width: 100%;
      height: 100%;
    }
    
    .notification-badge {
      position: absolute;
      top: -2px;
      right: -2px;
      min-width: 13px;
      height: 13px;
      padding:0 3px;
      background-color: #fa3e3e;
      border-radius: 8px;
      color: white;
    
      font-size: 7px;
      font-weight: bold;
      line-height: 16px;
      text-align: center;
      box-shadow: 0 0 0 1.5px white;
      transition: transform 0.2s ease;
     
    }
    

    
   
  </style>
  @yield('css')
</head>

<body class="overflow-hidden">
   <div class="pos-fixed c-white loader top-0 left-0 right-0 column justify-center bottom-0 z-index-9000 bg">
  <svg fill="currentColor" width="100" height="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_g88x" begin="0;spinner_yOmw.begin+0.6s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="0;spinner_yOmw.begin+0.6s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="0;spinner_yOmw.begin+0.6s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_yOmw" begin="spinner_g88x.begin+0.6s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="spinner_g88x.begin+0.6s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="spinner_g88x.begin+0.6s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path></svg>
</div>
    <header  style="z-index: 5000" class="pos-sticky average primary-text bg-primary p-10 top-0 left-0 right-0 bottom-0 row align-center g-10">
        <div onclick="
            document.querySelector('nav').classList.remove('mobile-display-none');
             document.querySelector('nav section.nav').classList.add('animation-trans-in-from-left');
            

            " class="h-40 w-40 column pc-display-none justify-center c-primary br-5 p-10 bg-white">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>

        </div>
        <img src="{{ asset('favicon/logo.png?v=1.3') }}" alt="Logo" class="h-30">
        <div class="m-left-auto row g-5 align-center">
            <div onclick="window.location.href='{{ url('admins/notifications') }}'" class="notification-icon">
    <!-- Bell icon -->
    <svg height="30" width="30" class="bell-icon" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
      <path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216Z"/>
    </svg>
    {!! NotifyAmount() !!}
  </div>
        </div>
    </header>
    <nav style="z-index: 5000" onclick="
    this.querySelector('section.nav').classList.remove('animation-trans-in-from-lef');
    this.classList.add('mobile-display-none');
  
    " class="pos-fixed mobile-display-none high top-0 left-0 right-0 bottom-0 bg-black-transparent average">
        <section onclick="event.stopPropagation()" class="nav transition-ease-half overflow-auto column bg-white h-full w-semi-full">
            <div class="nav-profile pos-sticky stick-top w-full column g-10 p-10">
              <img src="{{ asset('favicon/logo.png?v=1.3') }}" alt="Logo" class="w-half">
           <strong class="desc " style="color:var(--primary-text);font-weight:900;font-size:2rrem;">{{ ucfirst(Auth::guard('admins')->user()->role) }}</strong>
            </div>
            <div class="nav-links flex-auto bg-inherit w-full column">
              {{-- NEW NAV LINK --}}
              <a class="p-10 w-full align-center row g-5 no-u c-black" href="{{ url('admins/dashboard') }}">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm54.59,45a8,8,0,0,1,11.29.7,88,88,0,0,1,17.6,30.47,8,8,0,0,1-15.18,5.08,71.87,71.87,0,0,0-14.4-25A8,8,0,0,1,182.59,69ZM73.41,187.05a8,8,0,0,1-11.29-.7,88,88,0,0,1-17.6-30.47A8,8,0,1,1,59.7,150.8a71.87,71.87,0,0,0,14.4,24.95A8,8,0,0,1,73.41,187.05Zm.69-106.8a71.87,71.87,0,0,0-14.4,25,8,8,0,1,1-15.18-5.08,88,88,0,0,1,17.6-30.47,8,8,0,1,1,12,10.6Zm71.49,134a87.8,87.8,0,0,1-35.18,0,8,8,0,0,1,3.18-15.68,72.08,72.08,0,0,0,28.82,0,8,8,0,0,1,3.18,15.68Zm6.25-163A8,8,0,0,1,144,57.61a7.89,7.89,0,0,1-1.6-.16,72.08,72.08,0,0,0-28.82,0,8,8,0,1,1-3.18-15.68,87.92,87.92,0,0,1,35.18,0A8,8,0,0,1,151.84,51.2Zm59.64,104.68a88,88,0,0,1-17.6,30.47,8,8,0,1,1-12-10.6,71.87,71.87,0,0,0,14.4-24.95,8,8,0,0,1,15.18,5.08Z"></path></svg>

                    Dashboard
                <svg class="m-left-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                </a>
                
                {{-- NEW NAV LINK --}}
                <div class="nav-group w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 align-center w-full main-a row g-5 no-u c-black" >
                     <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z" fill="CurrentColor"></path>
<path d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z" fill="CurrentColor"></path>
<path d="M7.12205 5C7.29951 5 7.47276 5.01741 7.64005 5.05056C7.23249 5.77446 7 6.61008 7 7.5C7 8.36825 7.22131 9.18482 7.61059 9.89636C7.45245 9.92583 7.28912 9.94126 7.12205 9.94126C5.70763 9.94126 4.56102 8.83512 4.56102 7.47063C4.56102 6.10614 5.70763 5 7.12205 5Z" fill="CurrentColor"></path>
<path d="M5.44734 18.986C4.87942 18.3071 4.5 17.474 4.5 16.5C4.5 15.5558 4.85657 14.744 5.39578 14.0767C3.4911 14.2245 2 15.2662 2 16.5294C2 17.8044 3.5173 18.8538 5.44734 18.986Z" fill="CurrentColor"></path>
<path d="M16.9999 7.5C16.9999 8.36825 16.7786 9.18482 16.3893 9.89636C16.5475 9.92583 16.7108 9.94126 16.8779 9.94126C18.2923 9.94126 19.4389 8.83512 19.4389 7.47063C19.4389 6.10614 18.2923 5 16.8779 5C16.7004 5 16.5272 5.01741 16.3599 5.05056C16.7674 5.77446 16.9999 6.61008 16.9999 7.5Z" fill="CurrentColor"></path>
<path d="M18.5526 18.986C20.4826 18.8538 21.9999 17.8044 21.9999 16.5294C21.9999 15.2662 20.5088 14.2245 18.6041 14.0767C19.1433 14.744 19.4999 15.5558 19.4999 16.5C19.4999 17.474 19.1205 18.3071 18.5526 18.986Z" fill="CurrentColor"></path>
</svg>

Users
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/users/all') }}">All Users</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/users/active') }}">Active Users</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/users/banned') }}">Banned Users</a>
                             <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/vendors') }}">Vendors</a>
                      </div>
                </div>

                 {{-- NEW NAV LINK --}}
                  <div class="nav-group w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 w-full main-a align-center row g-5 no-u c-black" >
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,64H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56v8H32A16,16,0,0,0,16,80v28a4,4,0,0,0,4,4H64V96.27A8.17,8.17,0,0,1,71.47,88,8,8,0,0,1,80,96v16h96V96.27A8.17,8.17,0,0,1,183.47,88,8,8,0,0,1,192,96v16h44a4,4,0,0,0,4-4V80A16,16,0,0,0,224,64Zm-64,0H96V56a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Zm80,68v60a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V132a4,4,0,0,1,4-4H64v16a8,8,0,0,0,8.53,8A8.17,8.17,0,0,0,80,143.73V128h96v16a8,8,0,0,0,8.53,8,8.17,8.17,0,0,0,7.47-8.25V128h44A4,4,0,0,1,240,132Z"></path></svg>
                    Task Categories
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/categories/add') }}">Add New Category</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/categories/manage') }}">Manage Categories</a>
                           
                      </div>
                </div>

                 {{-- NEW NAV LINK --}}
                  <div class="nav-group w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 w-full main-a align-center row g-5 no-u c-black" >
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M248,80v96a16,16,0,0,1-16,16H140a4,4,0,0,1-4-4V68a4,4,0,0,1,4-4h92A16,16,0,0,1,248,80ZM120,48V208a8,8,0,0,1-16,0V192H24A16,16,0,0,1,8,176V80A16,16,0,0,1,24,64h80V48a8,8,0,0,1,16,0ZM88,112a8,8,0,0,0-8-8H48a8,8,0,0,0,0,16h8v24a8,8,0,0,0,16,0V120h8A8,8,0,0,0,88,112Z"></path></svg>
                    Task SubCategories
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/subcategories/add') }}">Add New SubCategory</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/subcategories/manage') }}">Manage SubCategories</a>
                           
                      </div>
                </div>
                
                   {{-- <div class="nav-group display-none w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 w-full main-a row g-5 no-u c-black" >
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M12.7499 18.968C13.1812 18.857 13.4999 18.4655 13.4999 17.9996V17.2733C13.4999 17.1099 13.3953 16.9649 13.2403 16.9132C12.4351 16.6448 11.5646 16.6448 10.7594 16.9132C10.6044 16.9649 10.4999 17.1099 10.4999 17.2733V17.9996C10.4999 18.4655 10.8186 18.857 11.2499 18.968V22.25C11.2499 22.6642 11.5856 23 11.9999 23C12.4141 23 12.7499 22.6642 12.7499 22.25V18.968Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6669 5.13443L10.165 4.77922C9.44862 4.27225 8.59264 4 7.71504 4H7.10257C6.69838 4 6.29009 4.02549 5.90915 4.16059C3.52645 5.00566 1.88749 8.09504 2.00604 15.1026C2.02992 16.5145 2.3603 18.075 3.63423 18.6842C4.03121 18.8741 4.49667 19 5.02671 19C5.66273 19 6.1678 18.8187 6.55763 18.5632C6.96641 18.2953 7.32633 17.9471 7.68612 17.599C8.13071 17.1688 8.57511 16.7389 9.11125 16.4609C9.69519 16.1581 10.3434 16 11.0011 16H12.9989C13.6566 16 14.3048 16.1581 14.8888 16.4609C15.4249 16.7389 15.8693 17.1688 16.3139 17.599C16.6737 17.9471 17.0336 18.2953 17.4424 18.5632C17.8322 18.8187 18.3373 19 18.9733 19C19.5033 19 19.9688 18.8741 20.3658 18.6842C21.6397 18.075 21.9701 16.5145 21.994 15.1026C22.1125 8.09503 20.4735 5.00566 18.0908 4.16059C17.7099 4.02549 17.3016 4 16.8974 4H16.2849C15.4074 4 14.5514 4.27225 13.8351 4.77922L13.3332 5.13441C12.9434 5.41029 12.4776 5.55844 12 5.55844C11.5225 5.55844 11.0567 5.41029 10.6669 5.13443ZM16.75 8C17.1642 8 17.5 8.33579 17.5 8.75C17.5 9.16421 17.1642 9.5 16.75 9.5C16.3358 9.5 16 9.16421 16 8.75C16 8.33579 16.3358 8 16.75 8ZM7.5 8.25C7.91421 8.25 8.25 8.58579 8.25 9V9.75H9C9.41421 9.75 9.75 10.0858 9.75 10.5C9.75 10.9142 9.41421 11.25 9 11.25H8.25V12C8.25 12.4142 7.91421 12.75 7.5 12.75C7.08579 12.75 6.75 12.4142 6.75 12V11.25H6C5.58579 11.25 5.25 10.9142 5.25 10.5C5.25 10.0858 5.58579 9.75 6 9.75H6.75V9C6.75 8.58579 7.08579 8.25 7.5 8.25ZM19 10.25C19 10.6642 18.6642 11 18.25 11C17.8358 11 17.5 10.6642 17.5 10.25C17.5 9.83579 17.8358 9.5 18.25 9.5C18.6642 9.5 19 9.83579 19 10.25ZM15.25 11C15.6642 11 16 10.6642 16 10.25C16 9.83579 15.6642 9.5 15.25 9.5C14.8358 9.5 14.5 9.83579 14.5 10.25C14.5 10.6642 14.8358 11 15.25 11ZM17.5 11.75C17.5 11.3358 17.1642 11 16.75 11C16.3358 11 16 11.3358 16 11.75C16 12.1642 16.3358 12.5 16.75 12.5C17.1642 12.5 17.5 12.1642 17.5 11.75Z" fill="CurrentColor"></path>
</svg>
   Games Vouchers
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/vouchers/add') }}">Add New</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/vouchers/all') }}">All Vouchers</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/vouchers/active') }}">Active Vouchers</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/vouchers/redeemed') }}">Redeemed Vouchers</a>
                      </div>
                </div> --}}

                {{-- NEW NAV LINK --}}
                 <div class="nav-group w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 w-full align-center main-a row g-5 no-u c-black" >
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM169.66,133.66l-48,48a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L116,164.69l42.34-42.35a8,8,0,0,1,11.32,11.32ZM48,80V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80Z"></path></svg>
                      Tasks
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/tasks/add') }}">Add Task</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/tasks/manage') }}">Manage Tasks</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/tasks/submitted') }}">Submitted Proofs</a>
                            </div>
                </div>
               
                {{-- NEW NAV LINK --}}
                   <div class="nav-group w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 align-center w-full main-a row g-5 no-u c-black" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M168,224a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,224ZM232,64V176a24,24,0,0,1-24,24H48a24,24,0,0,1-24-24V64A24,24,0,0,1,48,40H208A24,24,0,0,1,232,64Zm-74.34,42.34-24-24a8,8,0,0,0-11.32,0l-24,24a8,8,0,0,0,11.32,11.32L120,107.31V152a8,8,0,0,0,16,0V107.31l10.34,10.35a8,8,0,0,0,11.32-11.32Z"></path></svg>
                       Deposits
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/deposits/all') }}">All Deposits</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/deposits/pending') }}">Pending Deposits</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/deposits/success') }}">Successfull Deposits</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/deposits/rejected') }}">Rejected Deposits</a>
                      </div>
                </div>

                 {{-- NEW NAV LINK --}}
                 <div class="nav-group w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 align-center w-full main-a row g-5 no-u c-black" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232,64V176a24,24,0,0,1-24,24H48a24,24,0,0,1-24-24V64A24,24,0,0,1,48,40H208A24,24,0,0,1,232,64ZM160,216H96a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16Z"></path></svg>
                       Withdrawals
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/withdrawals/all') }}">All Withdrawals</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/withdrawals/pending') }}">Pending Withdrawals</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/withdrawals/success') }}">Successfull Withdrawals</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/withdrawals/rejected') }}">Rejected Withdrawals</a>
                      </div>
                </div>

                 {{-- NEW NAV LINK --}}
                 <a class="p-10 w-full align-center row g-5 no-u c-black" href="{{ url('admins/transactions') }}">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM117.66,149.66l-32,32a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,11.32-11.32L80,164.69l26.34-26.35a8,8,0,0,1,11.32,11.32Zm0-64-32,32a8,8,0,0,1-11.32,0l-16-16A8,8,0,0,1,69.66,90.34L80,100.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM192,168H144a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Zm0-64H144a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16Z"></path></svg>


                    Transaction History
                <svg class="m-left-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                </a>
                 
                {{-- NEW NAV LINK --}}
                 <a class="p-10 w-full align-center row g-5 no-u c-black" href="{{ url('admins/site/settings') }}">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M232,120h-8.34a95.07,95.07,0,0,0-8.82-32.9l7.23-4.17a8,8,0,0,0-8-13.86l-7.25,4.19a97,97,0,0,0-24.08-24.08l4.19-7.25a8,8,0,0,0-13.86-8l-4.17,7.23A95.07,95.07,0,0,0,136,32.34V24a8,8,0,0,0-16,0v8.34a95.07,95.07,0,0,0-32.9,8.82l-4.17-7.23a8,8,0,0,0-13.86,8l4.19,7.25A97,97,0,0,0,49.18,73.26l-7.25-4.19a8,8,0,0,0-8,13.86l7.23,4.17A95.07,95.07,0,0,0,32.34,120H24a8,8,0,0,0,0,16h8.34a95.07,95.07,0,0,0,8.82,32.9l-7.23,4.17a8,8,0,0,0,4,14.93,7.92,7.92,0,0,0,4-1.07l7.25-4.19a97,97,0,0,0,24.08,24.08l-4.19,7.25a8,8,0,0,0,13.86,8l4.17-7.23a95.07,95.07,0,0,0,32.9,8.82V232a8,8,0,0,0,16,0v-8.34a95.07,95.07,0,0,0,32.9-8.82l4.17,7.23a8,8,0,0,0,13.86-8l-4.19-7.25a97,97,0,0,0,24.08-24.08l7.25,4.19A8,8,0,0,0,225,184a8,8,0,0,0-2.92-10.93l-7.23-4.17a95.07,95.07,0,0,0,8.82-32.9H232a8,8,0,0,0,0-16ZM72,128A55.91,55.91,0,0,1,93.38,84l25.38,44L93.38,172A55.91,55.91,0,0,1,72,128Zm56,56a55.67,55.67,0,0,1-20.78-4l25.4-44h50.8A56.09,56.09,0,0,1,128,184Zm4.62-64-25.4-44a56,56,0,0,1,76.2,44Z"></path></svg>


                    Site Settings
                <svg class="m-left-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                </a>

                 {{-- NEW NAV LINK --}}
                 <a class="p-10 w-full align-center row g-5 no-u c-black" href="{{ url('admins/logs') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,40V216a8,8,0,0,1-16,0V40a8,8,0,0,1,16,0ZM117.66,50.34A8,8,0,0,0,104,56v64H32a8,8,0,0,0,0,16h72v64a8,8,0,0,0,13.66,5.66l72-72a8,8,0,0,0,0-11.32Z"></path></svg>
                  System Logs
                <svg class="m-left-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                </a>




                 
                 
                 {{-- NEW NAV LINK --}}
                 <a class="p-10 pos-sticky align-center m-top-auto stick-bottom bg-inherit w-full row g-5 no-u c-red" href="{{ url('admins/logout') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M120,216a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H56V208h56A8,8,0,0,1,120,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L204.69,120H112a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,229.66,122.34Z"></path></svg>


                  Logout
                <svg class="m-left-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                </a>


            </div>

        </section>
    </nav>
    <main class="bg-whitesmoke c-black">
       
        @yield('main')
<section onclick="HidePopUp()" class="popup">
  <div onclick="event.stopPropagation()" style="background:white;color:black;" class="child">

  </div>
</section>
    </main>
    <footer class="w-full p-10 column align-center text-center bg-primary primary-text">
        <span>&copy;2025 {{ config('app.name') }} Admin Dashboard</span>
        <span>Built & Designed by <a class="c-inherit" href="https://wa.me/+2349013350351">Techie Innovations</a></span>
    </footer>

     <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>
     <script class="js">
      window.addEventListener('load',()=>{
          document.querySelector('.loader').remove();
        document.querySelector('body').classList.remove('overflow-hidden');
      
      });
     </script>
    @yield('js')
</body>
</html>