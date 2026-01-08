@extends('layout.users.app')
@section('title')
    Photo Update
@endsection
@section('main')
     <section class="w-full g-10 p-10 column h-full flex-auto align-center">

        <div class=" w-full column g-10 max-w-500 br-10 p-10">
            <div class="row space-between br-10 align-center">

                <span class="desc bold">Update Profile Photo</span>
              
            </div>
            <div class="column g-5 w-full">
                
                <span>Updating your profile photo means your display photo would be updated across the entire platform.</span>
            </div>
            <form enctype="multipart/form-data" action="{{ url('users/post/update/profile/photo/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Updated)" class="w-full align-center  column g-10">
               <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
                <label style="border:2px dashed var(--primary)" class="w-fit label pointer p-20 no-select column justify-center text-center perfect-square clip-circle circle bg-light">
                    <div class="column text align-center g-5">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="50" width="50"><path d="M247.93,124.52C246.11,77.54,207.07,40,160.06,40A88.1,88.1,0,0,0,81.29,88.67h0A87.48,87.48,0,0,0,72,127.73,8.18,8.18,0,0,1,64.57,136,8,8,0,0,1,56,128a103.66,103.66,0,0,1,5.34-32.92,4,4,0,0,0-4.75-5.18A64.09,64.09,0,0,0,8,152c0,35.19,29.75,64,65,64H160A88.09,88.09,0,0,0,247.93,124.52Zm-50.27,9.14a8,8,0,0,1-11.32,0L168,115.31V176a8,8,0,0,1-16,0V115.31l-18.34,18.35a8,8,0,0,1-11.32-11.32l32-32a8,8,0,0,1,11.32,0l32,32A8,8,0,0,1,197.66,133.66Z"></path></svg>

<span>Click to Upload</span>
<span>JPG,PNG or JPEG MAX 5MB</span>
                    </div>
                    <input onchange="
                    let file=this.files[0];
                    if(file){
                    this.closest('.label').querySelector('img').src=window.URL.createObjectURL(file);
                    this.closest('.label').querySelector('img').classList.remove('display-none');
                    this.closest('.label').querySelector('.text').classList.add('display-none');
                    

                    }else{
                     this.closest('.label').querySelector('img').src='';
                    this.closest('.label').querySelector('img').classList.add('display-none');
                    this.closest('.label').querySelector('.text').classList.remove('display-none');
                    
                    }
                    " type="file" name="photo" accept="image/*" required class="display-none input">
                     <img src="" alt="" class="w-full display-none h-full circle">
                </label>
               
               
             
                <button class="post br-0 clip-0 m-top-auto bold">Update Profile Photo</button>
            </form>
        </div>
      
    </section>
@endsection
@section('js')
    <script class="js">

        window.MyFunc = {
            Updated : function(response,event){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    spa(event,data.url);
                }
            },
            Restyle : function(){
                document.querySelector('.label').style.maxWidth=document.querySelector('.label').getBoundingClientRect().width + 'px';
            }
        }
        MyFunc.Restyle();
    </script>
@endsection