@extends('layout.users.index')
@section('title')
    Vendors
@endsection
@section('css')
<style class="css">
     .quick-link{
            position:relative;
            

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
        .chat-btn{
            width:fit-content;
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
            clip-path:inset(0 round 5px);
            border-radius:5px;
            gap:5px;
            cursor:pointer;
        }
</style>
    
@endsection
@section('main')
    <section class="w-full column g-10 align-center">
        <strong class="hero-title">Buy {{ $voucher ?? 'coupon' }} Code</strong>
        <span class="text-center">Chat any of our verified vendors on whatsapp to buy your {{ $voucher ?? 'coupon' }} code from them.</span>
        <span class="text-center c-red" style="color:gold">Note: Do not pay to anyone not listed on this page.We will not be held responsible for loss of funds.Only pay to vendors listed on thie page.</span>
        @if ($vendors->isEmpty())
            @include('components.sections',[
                'null' => true,
                'text' => 'No Vendors Available at the moment,check back later'
            ])
        @else
           <div class="grid pc-grid-2 w-full g-10 place-center">
             @foreach ($vendors as $data)
                <div style="border:1px solid var(--bg-lighter)" class="w-full br-10 p-20 column g-10 bg-light">
                   <div class="w-full row align-center g-10">
                     <img src="{{ asset('users/'.$data->photo.'') }}" alt="" class="h-70 w-70 circle">
                   
                   <div class="column m-right-auto g-5">
                    <strong class="desc">{{ $data->username }}</strong>
                    <span class="row align-center g-5">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 10.1433C3.25 5.24427 7.15501 1.25 12 1.25C16.845 1.25 20.75 5.24427 20.75 10.1433C20.75 12.5084 20.076 15.0479 18.8844 17.2419C17.6944 19.4331 15.9556 21.3372 13.7805 22.3539C12.6506 22.882 11.3494 22.882 10.2195 22.3539C8.04437 21.3372 6.30562 19.4331 5.11556 17.2419C3.92403 15.0479 3.25 12.5084 3.25 10.1433ZM12 2.75C8.00843 2.75 4.75 6.04748 4.75 10.1433C4.75 12.2404 5.35263 14.5354 6.4337 16.526C7.51624 18.5192 9.04602 20.1496 10.8546 20.995C11.5821 21.335 12.4179 21.335 13.1454 20.995C14.954 20.1496 16.4838 18.5192 17.5663 16.526C18.6474 14.5354 19.25 12.2404 19.25 10.1433C19.25 6.04748 15.9916 2.75 12 2.75ZM12 7.75C10.7574 7.75 9.75 8.75736 9.75 10C9.75 11.2426 10.7574 12.25 12 12.25C13.2426 12.25 14.25 11.2426 14.25 10C14.25 8.75736 13.2426 7.75 12 7.75ZM8.25 10C8.25 7.92893 9.92893 6.25 12 6.25C14.0711 6.25 15.75 7.92893 15.75 10C15.75 12.0711 14.0711 13.75 12 13.75C9.92893 13.75 8.25 12.0711 8.25 10Z" fill="CurrentColor"></path>
</svg>

<span>{{ ucfirst($data->country) }}</span>
                    </span>
                   </div>

                    <button onclick="window.open('https://wa.me/{{$data->phone}}?text={{ urlencode('Hello '.ucfirst($data->username).',are you online,i want to purchase '.($voucher ?? 'coupon').' code for '.config('app.name').'') }}')" class="chat-btn">
                     <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="CurrentColor" viewBox="0 0 256 256"><path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path></svg>





                        <span>Chat</span>
                    </button>
                   </div>
                </div>
            @endforeach
           </div>
        @endif
    </section>
@endsection