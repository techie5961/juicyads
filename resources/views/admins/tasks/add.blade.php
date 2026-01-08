@extends('layout.admins.app')
@section('title')
    Add Task
@endsection
@section('css')
    <style class="css">
        .subcategory{
            display:none !important;
        }
        form.active .subcategory{
            display:flex !important;
        }
    </style>
@endsection
@section('main')
    <section class="column p-10 w-full g-10">
        <form action="{{ url('admins/post/task/add/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Posted)" class="w-full bg-white br-10 box-shadow p-10 column g-10">
            <input type="hidden" name="_token" class="input" value="{{ @csrf_token() }}">
            <div class="row w-full c-bg-secondary g-10 align-center">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="32" width="32"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM169.66,133.66l-48,48a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L116,164.69l42.34-42.35a8,8,0,0,1,11.32,11.32ZM48,80V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80Z"></path></svg>
                <strong class="desc c-bg-secondary">Add New Task</strong>
            </div>
            <hr>
            {{-- NEW INPUT --}}
             <div class="column w-full g-5">
            <label for="">Task Category</label>
            <div class="w-full cont pc-pointer h-50 border-1 br-5 row align-center space-between bg-dim border-color-silver">
             <select onchange="MyFunc.CategorySelected(this)" name="category" class="w-full required h-full bg-transparent br-10 no-border inp input">
                <option value="" selected disabled>Select Category....</option>
               @if ($categories->isEmpty())
                   <option value="" disabled>No category available please add categories to continue</option>
               @else
                   @foreach ($categories as $data)
                       <option value="{{ $data->id }}">{{ ucfirst($data->name) }}</option>
                   @endforeach
               @endif
            </select>  
            </div>
             </div>
            {{-- NEW INPUT --}}
           <div class="column subcategory w-full g-5">
              <label for="">Select SubCategory</label>
            <div class="w-full  cont pc-pointer h-50 border-1 br-5 row align-center space-between bg-dim border-color-silver">
             <select onchange="
                
                " name="subcategory" class="w-full required h-full bg-transparent br-10 no-border inp input">
               
            </select>  
            </div>
           </div>
            
             {{-- NEW INPUT --}}
             <div class="column w-full g-5">
            <label for="">Task Link</label>
             <div class="w-full cont pc-pointer h-50 border-1 br-5 row align-center space-between bg-dim border-color-silver">
            <input placeholder="Enter task url/link" name="link" type="url" class="inp required input w-full h-full br-10 bg-transparent no-border"> 
            </div>
             </div>

              {{-- NEW INPUT --}}
             <div class="column w-full g-5">
             <label for="">Task Limit</label>
             <div class="w-full cont pc-pointer h-50 border-1 br-5 row align-center space-between bg-dim border-color-silver">
            <input placeholder="Enter task limit" name="limit" type="number" class="inp required input w-full h-full br-10 bg-transparent no-border"> 
            </div>
             </div>
            <button class="post bg-secondary secondary-text"><span>Add Task</span></button>
        </form>

    </section>
   
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Posted : function(response){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    window.location.href=data.url;
                }
            },
            CategorySelected : async function(element){
                // alert('{{ url('get/fetch/subcategories/process') }}?category_id=' + element.value)
                 element.closest('form').classList.add('active');
                element.closest('form').querySelector('.subcategory select').innerHTML=`<option value=''>Fetching subcategories,please wait....</option>`;
                let response=await fetch('{{ url('get/fetch/subcategories/process') }}?category_id=' + element.value);
                if(response.ok){
                let data=await response.text();
                element.closest('form').querySelector('.subcategory select').innerHTML=data;
                }else{
                alert(response.status)
                }
            }
        }
    </script>
@endsection