<div class="container-fluid ">
    <h2 class="text-center mb-5 text-navy">@lang('TAKE PART')</h2>

    <div class="row">
    
        <div class="col-md-6 p-0 m-0" s tyle="border: 2px solid blue;">
            <img  class="w-100" src="/images/takepart/{{ $takepart->image }}" alt="image" >
        </div>

        <div class="col-md-6 bg-navy text-light ">
            <div class="px-3" style="margin-top: 15%; bo rder: 2px solid blue;">
            <h4 style="text-transform: uppercase">{{  $takepart->$title_lang }}</h4>
            <p>{{  $takepart->$desc_lang }}</p>
            </div>
           <a class="btn btn-outline-light rounded-0 mx-3 mt-5 mb-3" href="">@lang('Read more..')</a>
        </div>
   
        


</div>
</div>
