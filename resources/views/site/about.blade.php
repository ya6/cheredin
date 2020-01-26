<div class="container-fluid" s tyle="border: 2px solid blue;">
    <h2 class="text-center text-uppercase mb-5 text-navy">@lang('About me')</h2>

    <div class="row">
    
        <div class="col-md-6 p-0 m-0" s tyle="border: 2px solid blue;">
            <img  class="w-100" src="/images/about/{{ $about->image }}" alt="icon" >
        </div>

        <div class="col-md-6 bg-navy text-light " style="background:#000080;">
            <div class="px-3" style="margin-top: 15%; bo rder: 2px solid blue;">
            <h4 style="text-transform: uppercase">{{$about->$title_lang}}</h4>
            <p>{{ $about->$desc_lang }}</p>
            </div>
           <a class="btn btn-outline-light rounded-0 mx-3 mt-5 mb-3" href="/about">@lang('Read more..')</a>
        </div>
   
        


</div>
</div>
<br>
<br>