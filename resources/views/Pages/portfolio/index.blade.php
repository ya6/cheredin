@extends ('layouts.sitelayout')

@section('title', 'Vladimir Reredin | Gallery')

@section('style')
<style>
@keyframes grow { 
    from {max-width:0%}
    to {max-width:100%}
}

</style>
@endsection

@section('content')


<div class="d-none position-fixed" id="overlay"
style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 10; background-color: rgba(0,0,0,0.5); " >

<img  id="big_img" class="position-absolute shadow " src="" alt="изображение!" 
style=" max-width: 100%;  max-height: 80%; z-index:1000; top:50%; left:50%;  transform: translate(-50%, -50%);  animation: grow 1s;">

</div>


<div class="container mx-auto"   id="gallery_cont"  style="margin: 30px 0;">
    <h2 class="text-center text-uppercase text-navy">@lang('Photos')</h2>

    <div   class="row justify-content-around">
        
@foreach($photos as $photo)
        <div class=" col-md-3 card rounded-0 bg-light p-0 m-3 " style="width: 18rem">
            <img class="card-img-top" src="/images/photos/{{ $photo->image }}" alt="Card image cap">
            <div class="card-body">
               <p class="">{{ $photo->$desc_lang}}</p>
                <button class="btn btn-outline-secondary rounded-0 text-navy"> @lang('View') </button>
            </div>
        </div>
@endforeach

        

    </div>


<!-- REWARDS -->

    <h2 class="text-center text-uppercase text-navy">@lang('Rewards')</h2>

    <div   id="gallery_cont" class="row justify-content-around">

    @foreach ($rewards as $reward)

        <div class=" col-md-3 card rounded-0 bg-light p-0 m-3 " style="width: 18rem">
            <img class="card-img-top" src="/images/rewards/{{ $reward->image }}" alt="Card image cap">
            <div class="card-body">
               <p class="">{{ $reward->$desc_lang }}</p>
                <button class="btn btn-outline-secondary rounded-0 text-navy"> @lang('View') </button>
            </div>
        </div>
    @endforeach
      
        </div>


       

    </div>

</div>

@endsection

@section('script')

<script> 
gallery_cont = document.querySelector('#gallery_cont');

console.log()
big_img = document.querySelector('#big_img');
gallery_cont.addEventListener('click',function(e){
  
    if(e.target.nodeName=="BUTTON") {
      //  console.log(e.target.offsetParent.children['0'].getAttribute('src'));
        img_src = e.target.offsetParent.children['0'].getAttribute('src');
        big_img.setAttribute('src', img_src);
        overlay.classList.remove('d-none');
    }

});

big_img.addEventListener('click',function(e){
    overlay.classList.add('d-none');
});

</script>

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