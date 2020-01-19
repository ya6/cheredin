@extends ('layouts.sitelayout')

@section('title', 'Vladimir Reredin | About')

@section('content')

<div class="container-fluid" >
    <h2 class="text-center my-4 text-navy ">@lang('ABOUT ME')</h2>

    <div class="row">
    
        <div class="col-md-6 p-0 m-0" s tyle="border: 2px solid blue;">
            <img  class="w-100" src="/images/about/{{ $about->image }}" alt="icon" >
        </div>

        <div class="col-md-6 bg-navy text-light " style="background:#000080;">
            <div class="px-3" style="margin-top: 15%; bo rder: 2px solid blue;">
            <h4 style="text-transform: uppercase">{{ $about->$title_lang }}</h4>
            <p>{{ $about->$desc_lang }}</p>
            </div>
          
        </div>
   
      <br>
      <br>  


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