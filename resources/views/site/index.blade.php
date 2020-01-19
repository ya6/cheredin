@extends ('layouts.sitelayout')

@section ('content')

@include ('site.slider')

@include ('site.workout')

@include ('site.about')

@include ('site.portfolio')

@include ('site.video')

@include ('site.rewards')

@include ('site.event')


@include ('site.partners')

<!-- @include ('site.reviews') -->

@include ('site.takepart')

@include ('site.contact')

@endsection

@section ('script')

<script>

let page_en = '{{ $page_en }}';
let page_ru = '{{ $page_ru }}';


let mainnav=document.querySelector('#mainnav');



li = mainnav.children['0'].children;
console.log(li);
for (let index = 0; index < li.length; index++) {
     
    if(li[index].textContent.trim() == page_en || li[index].textContent.trim() == page_ru) {
      
        li[index].classList.add('active');
    }   
}

</script>

<!-- <script>
    let  modal = document.querySelector('.close');
   modal.addEventListener('click', function()
   {
  location.reload(true);
   })

  </script> -->

@endsection