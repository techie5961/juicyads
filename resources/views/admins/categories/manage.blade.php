@extends('layout.admins.app')
@section('title')
    Manage Categories
@endsection
@section('main')
    <section class="w-full column g-10 p-10">
      {{-- NEW DIV--}}
        <div class="w-full bg-light box-shadow p-10 br-10 row g-10">
           <div class="h-50 w-50 bg-green-transparent c-green br-5 column justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="32" width="32"><path d="M76,64A12,12,0,0,1,88,52H216a12,12,0,0,1,0,24H88A12,12,0,0,1,76,64Zm140,52H88a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24Zm0,64H88a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24ZM44,112a16,16,0,1,0,16,16A16,16,0,0,0,44,112Zm0-64A16,16,0,1,0,60,64,16,16,0,0,0,44,48Zm0,128a16,16,0,1,0,16,16A16,16,0,0,0,44,176Z"></path></svg>
          </div> 
          <div class="column g-5">
            <span>Total Categories</span>
            <strong class="desc">{{ number_format($total) }}</strong>
          </div>
        </div>

        {{-- NEW DIV --}}
         <div class="w-full bg-light box-shadow p-10 br-10 row g-10">
           <div class="h-50 w-50 bg-green-transparent c-green br-5 column justify-center">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="32" width="32"><path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path></svg>
         </div> 
          <div class="column g-5">
            <span>Active Categories</span>
            <strong class="desc">{{ number_format($active) }}</strong>
          </div>
        </div>


         {{-- NEW DIV --}}
         <div class="w-full bg-light box-shadow p-10 br-10 row g-10">
           <div class="h-50 w-50 bg-green-transparent c-green br-5 column justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="32" width="32"><path d="M148,152a20,20,0,1,1-20-20A20,20,0,0,1,148,152ZM228,48V208a20,20,0,0,1-20,20H48a20,20,0,0,1-20-20V48A20,20,0,0,1,48,28H68V24a12,12,0,0,1,24,0v4h72V24a12,12,0,0,1,24,0v4h20A20,20,0,0,1,228,48ZM52,52V76H204V52H188a12,12,0,0,1-24,0H92a12,12,0,0,1-24,0ZM204,204V100H52V204Z"></path></svg>
        </div> 
          <div class="column g-5">
            <span>Newly Added</span>
            <strong class="desc">{{ number_format($today) }}</strong>
          </div>
        </div>
        @if ($categories->isEmpty())
            
        @else
            @foreach ($categories as $data)
                <div class="w-full box-shadow row g-10 bg-light br-10 p-10">
                  <img class="h-70 perfect-square br-10" src="{{ asset('categories/'.$data->icon.'') }}" alt="">
                  <div class="column g-10">
                    <strong class="desc">{{ $data->name }}</strong>
                    <span style="opacity:0.5" class="row align-center">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="15" width="15"><path d="M236,137A108.13,108.13,0,1,1,119,20,12,12,0,0,1,121,44,84.12,84.12,0,1,0,212,135,12,12,0,1,1,236,137ZM116,76v52a12,12,0,0,0,12,12h52a12,12,0,0,0,0-24H140V76a12,12,0,0,0-24,0Zm92,20a16,16,0,1,0-16-16A16,16,0,0,0,208,96ZM176,64a16,16,0,1,0-16-16A16,16,0,0,0,176,64Z"></path></svg>

                      Last Updated {{ $data->frame }}</span>
                  </div>
                  <div class="m-left-auto row align-center g-10">
                    <div onclick="
                      MyFunc.Populate('{{ $data->id }}')
                      " class="h-50 br-10 clip-10 bg-red pointer no-select c-white p-10 column justify-center"> Delete </div>
                    <div onclick="window.location.href='{{ url('admins/categories/edit?id='.$data->id.'') }}'" class="h-50 min-w-50 br-10 clip-10 bg-blue pointer no-select c-white p-10 column justify-center"> Edit </div>
                  </div>
                </div>
            @endforeach

            @if ($categories->hasMorePages())
                @include('components.sections',[
                  'infinite_loading' => true,
                  'page' => $categories->currentPage() + 1
                ])
            @endif
        @endif
     
    </section>
@endsection
@section('js')
    <script class="js">
      InfiniteLoading();
    window.MyFunc = {
      Populate : function(id){
       let text=`
      <div class="column g-10 text-center align-center w-full">
          <span class="c-red">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="50" width="50"><path d="M216,48H180V36A28,28,0,0,0,152,8H104A28,28,0,0,0,76,36V48H40a12,12,0,0,0,0,24h4V208a20,20,0,0,0,20,20H192a20,20,0,0,0,20-20V72h4a12,12,0,0,0,0-24ZM100,36a4,4,0,0,1,4-4h48a4,4,0,0,1,4,4V48H100Zm88,168H68V72H188ZM116,104v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Zm48,0v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Z"></path></svg>

        </span>
<span>Are you sure you want to delete this Category?<br> This category and its subcategories would be deleted.<br>This action cannot be undone</span>
<button onclick="window.location.href='{{ url('admins/get/category/delete') }}?id=${id}'" class="btn-red w-full clip-5 br-5">Yes delete this category</button>
      </div>
       `;
        PopUp(text)
      }
    }
    </script>
@endsection