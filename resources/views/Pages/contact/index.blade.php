@extends ('layouts.sitelayout')

@section('title', 'Vladimir Reredin | Contact')

@section('content')

<div class="container-fluid" >

    <h2 class="text-center my-4 text-navy ">@lang('CONTACTS')</h2>

    <div class="row justify-content-center">



<div class="col-md-3 text-center">
        <img src="/images/icons/icon_phone.png" alt="icon" width="50">
        <h5 class="" >@lang('Phone')</h5>
        <p>+375 29 500-00-00</p>
</div>

<div class="col-md-3 text-center">
        <img src="/images/icons/icon_mail.png" alt="icon" width="45">
        <h5 class="" >@lang('E-mail')</h5>
        <p>cheredin@mail.ru</p>
</div>

<div class="col-md-3 text-center">
        <img src="/images/icons/icon_location.png" alt="icon" width="50">
        <h5 class="">@lang('Address')</h5>
        <p>Mozyr, Belarus</p>
</div>


   
      <br>
      <br>  


</div>

<div class="col p-5 mx-auto" style="max-width:700px">
   
   <form action="/send" method="post" style="margin-top:0%"> 
               @csrf
               <div class="form-group ">
                   <div class="input-group mb-2 ">
                       <div class="input-group-prepend">
                           <div class="input-group-text rounded-0" style="width:7rem">@lang('Name')</div>
                       </div>
                       <input type="text" class="form-control rounded-0"  name="name"  required>
                   </div>
               </div>
               <div class="form-group">
                   <div class="input-group mb-2">
                       <div class="input-group-prepend">
                           <div class="input-group-text rounded-0" style="width:7rem">@lang('E-mail')</div>
                       </div>
                       <input type="email" class="form-control rounded-0" name="email"  required>
                   </div>
               </div>

               <div class="form-group">
                   <div class="input-group mb-2">
                       <div class="input-group-prepend">
                           <div class="input-group-text rounded-0" style="width:7rem">@lang('Message')</div>
                       </div>
                       <textarea name ="message" class="form-control rounded-0"  required></textarea>
                   </div>
               </div>

               <div class=" mt-5 text-center">
                   <button  type="submit"  class="btn btn-outline-secondary btn-block rounded-0 py-2" 
                   style="border: 1px solid #ccc">@lang('Send')</button>
               </div>

   </form>

</div>

</div>
<br>
<br>

@endsection

@section('script')


<script>

let page_en = '{{ $page_en }}';
let page_ru = '{{ $page_ru }}';


let mainnav=document.querySelector('#mainnav');


li = mainnav.children['0'].children;
for (let index = 0; index < li.length; index++) {
     
    if(li[index].textContent.trim() == page_en || li[index].textContent.trim() == page_ru) {
      
        li[index].classList.add('active');
    }   
}

</script>





@endsection