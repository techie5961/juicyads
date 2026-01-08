@extends('layout.admins.app')
@section('title')
   Edit Category
@endsection
@section('main')
    <section class="w-full p-10 column g-10">
       <form method="POST" onsubmit="PostRequest(event,this,MyFunc.Posted)" action="{{ url('admins/post/edit/category/process') }}" class="w-full bg-light br-10 p-10 column g-10">
         <div class="row align-center c-primary g-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M224,64H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56v8H32A16,16,0,0,0,16,80v28a4,4,0,0,0,4,4H64V96.27A8.17,8.17,0,0,1,71.47,88,8,8,0,0,1,80,96v16h96V96.27A8.17,8.17,0,0,1,183.47,88,8,8,0,0,1,192,96v16h44a4,4,0,0,0,4-4V80A16,16,0,0,0,224,64Zm-64,0H96V56a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Zm80,68v60a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V132a4,4,0,0,1,4-4H64v16a8,8,0,0,0,8.53,8A8.17,8.17,0,0,0,80,143.73V128h96v16a8,8,0,0,0,8.53,8,8.17,8.17,0,0,0,7.47-8.25V128h44A4,4,0,0,1,240,132Z"></path></svg>

            <strong class="desc">Edit Category</strong>
          
        </div>
        <hr>
        <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="input">
          <input type="hidden" name="id" value="{{ $data->id }}" class="input">
          <input type="hidden" name="photo" value="{{ $data->icon }}" class="input">
        {{-- NEW INPUT --}}
        <div class="column w-full g-5">
            <label for="">Category Name</label>
            <div class="w-full h-50 br-5 bg-dim cont border-1 border-color-silver">
                <input value="{{ $data->name }}" type="text" name="name" placeholder="i.e Instagram" class="inp input w-full h-full border-none bg-transparent br-5 required">
            </div>
        </div>

        {{-- NEW INPUT --}}
         <div class="column w-full g-5">
            <label for="">Category Icon</label>
            <div class="w-full h-50 br-5 bg-dim cont border-1 border-color-silver">
                <input type="file" name="icon" class="inp input w-full h-full border-none bg-transparent br-5">
            </div>
        </div>


         {{-- NEW INPUT --}}
         <div class="column w-full g-5">
            <label for="">Brief Note(Optional)</label>
            <div class="w-full h-100 br-5 bg-dim cont border-1 border-color-silver">
                <textarea placeholder="Enter category brief note here..." style="resize: none" name="note" class="inp input w-full h-full border-none bg-transparent br-5">{{ $data->note }}</textarea>
            </div>
        </div>


        {{-- SUBMIT BUTTON --}}
        <button class="post br-5 clip-5">Save Changes</button>
        
    </form>
    </section>
@endsection
@section('js')
    <script class="js">
       window.MyFunc={
        Posted : function(response){
            let data=JSON.parse(response);
            if(data.status == 'success'){
                window.location.href='{{ url('admins/categories/manage') }}';
            }
        }
       } 
    </script>
@endsection