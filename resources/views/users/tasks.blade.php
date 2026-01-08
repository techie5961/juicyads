@extends('layout.users.app')
@section('title')
    Tasks
@endsection
@section('main')

    <section class="grid w-full pc-grid-2 g-10 p-10">
       
        @if ($tasks->isEmpty())
            @include('components.sections',[
                'null' => true,
                'text' => 'No task available at the moment,check back later'
            ])
        @else
        <strong class="desc grid-full">Available Tasks</strong>
            @foreach ($tasks as $data)
            <div class="column  w-full no-select g-10 p-10 br-10 bg-light box-shadow">
                <div class="row w-full align-center space-between">
                   <div class="row align-center g-5">
                    <div style="background:var(--bg-lighter)" class="h-40 w-40 circle column justify-center bg-light">
                        <img src="{{ asset('subcategories/'.$data->subcategory->icon.'') }}" alt="" class="h-30 perfect-square circle">

                    </div>
                     <strong class="desc">{{ ucwords($data->title) ?? 'null' }}</strong>
                   </div>
                    <div class="p-y-5 p-x-10 c-white font-1 bg-green br-5 bold">Reward : &#8358;{{ number_format($data->subcategory->reward ?? 0,2) }}</div>
                </div>
                <hr class="gradient">
                <div>
                    {!! nl2br($data->subcategory->instructions) !!}
                </div>
                <div class="w-full br-1000 h-5 bg-green"></div>
           <div class="row w-full align-center space-between">
             <span>Rate Done</span>
            <span>{{ $data->completed }}/{{ $data->limit }}</span>
        
           </div>
         
           <div class="grid buttons g-10 place-center w-full align-center">
            <button onclick="
                window.open('{{ $data->link }}');
                this.closest('.buttons').querySelector('.claim-btn').classList.remove('display-none');
                " style="border-radius:2px;clip-path:inset(0 round 2px)" class="btn-blue br-2 clip-2 w-full">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM169.66,133.66l-48,48a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L116,164.69l42.34-42.35a8,8,0,0,1,11.32,11.32ZM48,80V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80Z"></path></svg>
               

                <span>Perform this Task</span>
            </button>
                <button onclick='
    let data=` <form action="{{ url("users/post/claim/task/reward/process") }}" onsubmit="PostRequest(event,this,MyFunc.Completed)" class="w-full align-center column p-10 g-20">
            <label style="border:2px dashed var(--bg-lighter);background:var(--bg-light)" class="w-full img-label cont pointer clip-5 br-5 no-select column p-10 justify-center h-fit no-shrink">
                <div class="column summary p-10 align-center text-center g-5">
                   <svg width="50" height="50" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M21.9998 12.6978C21.9983 14.1674 21.9871 15.4165 21.9036 16.4414C21.8067 17.6308 21.6081 18.6246 21.1636 19.45C20.9676 19.814 20.7267 20.1401 20.4334 20.4334C19.601 21.2657 18.5405 21.6428 17.1966 21.8235C15.8835 22 14.2007 22 12.0534 22H11.9466C9.79929 22 8.11646 22 6.80345 21.8235C5.45951 21.6428 4.39902 21.2657 3.56664 20.4334C2.82871 19.6954 2.44763 18.777 2.24498 17.6376C2.04591 16.5184 2.00949 15.1259 2.00192 13.3967C2 12.9569 2 12.4917 2 12.0009V11.9466C1.99999 9.79929 1.99998 8.11646 2.17651 6.80345C2.3572 5.45951 2.73426 4.39902 3.56664 3.56664C4.39902 2.73426 5.45951 2.3572 6.80345 2.17651C7.97111 2.01952 9.47346 2.00215 11.302 2.00024C11.6873 1.99983 12 2.31236 12 2.69767C12 3.08299 11.6872 3.3952 11.3019 3.39561C9.44749 3.39757 8.06751 3.41446 6.98937 3.55941C5.80016 3.7193 5.08321 4.02339 4.5533 4.5533C4.02339 5.08321 3.7193 5.80016 3.55941 6.98937C3.39683 8.19866 3.39535 9.7877 3.39535 12C3.39535 12.2702 3.39535 12.5314 3.39567 12.7844L4.32696 11.9696C5.17465 11.2278 6.45225 11.2704 7.24872 12.0668L11.2392 16.0573C11.8785 16.6966 12.8848 16.7837 13.6245 16.2639L13.9019 16.0689C14.9663 15.3209 16.4064 15.4076 17.3734 16.2779L20.0064 18.6476C20.2714 18.091 20.4288 17.3597 20.5128 16.3281C20.592 15.3561 20.6029 14.1755 20.6044 12.6979C20.6048 12.3126 20.917 12 21.3023 12C21.6876 12 22.0002 12.3125 21.9998 12.6978Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 11C15.3787 11 14.318 11 13.659 10.341C13 9.68198 13 8.62132 13 6.5C13 4.37868 13 3.31802 13.659 2.65901C14.318 2 15.3787 2 17.5 2C19.6213 2 20.682 2 21.341 2.65901C22 3.31802 22 4.37868 22 6.5C22 8.62132 22 9.68198 21.341 10.341C20.682 11 19.6213 11 17.5 11ZM18.25 4.5C18.25 4.08579 17.9142 3.75 17.5 3.75C17.0858 3.75 16.75 4.08579 16.75 4.5V5.75H15.5C15.0858 5.75 14.75 6.08579 14.75 6.5C14.75 6.91421 15.0858 7.25 15.5 7.25H16.75V8.5C16.75 8.91421 17.0858 9.25 17.5 9.25C17.9142 9.25 18.25 8.91421 18.25 8.5V7.25H19.5C19.9142 7.25 20.25 6.91421 20.25 6.5C20.25 6.08579 19.9142 5.75 19.5 5.75H18.25V4.5Z" fill="CurrentColor"></path>
</svg>


                    <span>ATTACH SCREENSHOT OF TASK PERFORMED</span>
                    <span>JPG,PNG,JPEG MAX:2MB</span>
                </div>
                <img src="" alt="" class="w-half display-none br-10">
                    <input onchange="MyFunc.Preview(this)" type="file" accept="image/*" class="display-none inp input required">
            </label>
          <input type="text" value="{{ $data->id }}" name="id" class="inp input display-none">
            <input type="text" value="{{ @csrf_token() }}" name="_token" class="inp input display-none">

            <label class="row display-none m-right-auto align-center g-2">
                <input checked required type="checkbox" style="transform:scale(0.7)">
                I have performed the task correctly</label>
                <span class="c-red display-none bold text-average">
                    ⚠️ Warning
Submitting without properly completing the task will result in a permanent ban with no appeal.
All proofs are verified by admins — fake or incomplete submissions are not tolerated.
                </span>
           <div class="row align-center g-10">
             <button style="border-radius:2px;clip-path:inset(0 round 2px);" class="btn-blue c-white w-fit">Submit Task</button>
             <button type="button" onclick="MyFunc.Reselect(this)" style="border-radius:2px;clip-path:inset(0 round 2px);" class="btn-blue c-white w-fit clip-2 br-2">Re-Select</button>
            </div>
        </form>`;
        PopUp(data)
                ' style="border-radius:2px;clip-path:inset(0 round 2px)" class="btn-green g-5 w-full claim-btn display-none">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="CurrentColor"></path>
</svg>

                <span>Claim Task Reward</span></button>
                
              {{-- <button onclick="GetRequest(event,'{{ url('users/get/claim/task/reward?id='.$data->id.'') }}',this,MyFunc.Completed)" class="btn-green claim-btn display-none br-5 clip-5"><span>Claim Reward</span></button> --}}
           </div>
            </div>
        @endforeach
        {{-- @if ($tasks->hasMorePages())
            @include('components.sections',[
                'page' => $tasks->currentPage() + 1,
                'infinite_loading' => true
            ])
        @endif --}}
        @endif
      
    </section>
@endsection
@section('js')
    <script class="js">
        InfiniteLoading();
        window.MyFunc = {
            Completed : function(response,event){
                let data=JSON.parse(response);
                CreateNotify(data.status,data.message);
                if(data.status == 'success'){
                    HidePopUp();
                    spa(event,'{{ url('users/tasks') }}');
                }
            },
            Preview : function(element){
                
                    if(element.files[0]){
                    
                   element.closest(".cont").querySelector("img").src=window.URL.createObjectURL(element.files[0]);
                     element.closest(".cont").querySelector("img").classList.remove("display-none");
                     element.closest(".cont").querySelector(".summary").classList.add("display-none");
                   
                    }else{
                    element.closest(".cont").querySelector("img").src="";
                     element.closest(".cont").querySelector("img").classList.add("display-none");
                     element.closest(".cont").querySelector(".summary").classList.remove("display-none");
                    }
            },
            Reselect : function(element){
                element.closest('form').querySelector('.img-label').click();
                
            }
        }
    </script>
@endsection