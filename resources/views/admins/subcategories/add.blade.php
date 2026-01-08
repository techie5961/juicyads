@extends('layout.admins.app')
@section('title')
    Add SubCategory
@endsection
@section('main')
    <section class="w-full p-10 column g-10">
       <form method="POST" enctype="multipart/form-data" onsubmit="PostRequest(event,this,MyFunc.Posted)" action="{{ url('admins/post/add/subcategory/process') }}" class="w-full bg-light br-10 p-10 column g-10">
         <div class="row align-center c-primary g-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M248,80v96a16,16,0,0,1-16,16H140a4,4,0,0,1-4-4V68a4,4,0,0,1,4-4h92A16,16,0,0,1,248,80ZM120,48V208a8,8,0,0,1-16,0V192H24A16,16,0,0,1,8,176V80A16,16,0,0,1,24,64h80V48a8,8,0,0,1,16,0ZM88,112a8,8,0,0,0-8-8H48a8,8,0,0,0,0,16h8v24a8,8,0,0,0,16,0V120h8A8,8,0,0,0,88,112Z"></path></svg>

            <strong class="desc">Add New SubCategory</strong>
          
        </div>
        <hr>
        <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="input">

        {{-- NEW INPUT --}}
        <div class="column w-full g-5">
            <label for="">Category</label>
            <div class="w-full h-50 br-5 bg-dim cont border-1 border-color-silver">
               <select name="category" class="inp input w-full h-full border-none bg-transparent br-5 required" id="">
                <option value="" selected disabled>Selected Category....</option>
                @if (!$categories->isEmpty())
                    @foreach ($categories as $data)
                        <option value="{{ $data->id }}">{{ ucfirst($data->name) }}</option>
                    @endforeach
                @endif
               </select>

            </div>
        </div>
        {{-- NEW INPUT --}}
        <div class="column w-full g-5">
            <label for="">SubCategory Name</label>
            <div class="w-full h-50 br-5 bg-dim cont border-1 border-color-silver">
                <input type="text" name="name" placeholder="i.e Post Like" class="inp input w-full h-full border-none bg-transparent br-5 required">
            </div>
        </div>

         {{-- NEW INPUT --}}
        <div class="column w-full g-5">
            <label for="">SubCategory Reward</label>
            <div class="w-full h-50 br-5 bg-dim cont border-1 border-color-silver">
                <input type="number" name="reward" placeholder="i.e &#8358;50" class="inp input w-full h-full border-none bg-transparent br-5 required">
            </div>
        </div>

        {{-- NEW INPUT --}}
         <div class="column w-full g-5">
            <label for="">Category Icon</label>
            <div class="w-full h-50 br-5 bg-dim cont border-1 border-color-silver">
                <input type="file" name="icon" class="inp input w-full h-full border-none bg-transparent br-5 required">
            </div>
        </div>


         {{-- NEW INPUT --}}
         <div class="column w-full g-5">
            <label for="">Brief Note/Instructions(Optional)</label>
            <div class="w-full h-100 br-5 bg-dim cont border-1 border-color-silver">
                <textarea placeholder="Enter category brief note here..." style="resize: none" name="note" class="inp input w-full h-full border-none bg-transparent br-5"></textarea>
            </div>
        </div>


        {{-- SUBMIT BUTTON --}}
        <button class="post br-5 clip-5">Add SubCategory</button>
        
    </form>
    </section>
@endsection
@section('js')
    <script class="js">
       window.MyFunc={
        Posted : function(response){
            let data=JSON.parse(response);
            if(data.status == 'success'){
                window.location.href='{{ url('admins/subcategories/manage') }}';
            }
        }
       } 
    </script>
@endsection