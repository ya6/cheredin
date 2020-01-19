<div class="container mx-auto" style="margin: 100px 0;">
    <h2 class="text-center text-navy">@lang('PHOTOS')</h2>

    <div class="row justify-content-around">

    @for ($i = 0; $i < ($photos->count()<7 ? $photos->count() : 6 ) ; $i++)
    <div class=" col-md-3 card rounded-0 bg-light p-0 m-3" style="width: 18rem;">
            <img class="card-img-top" src="/images/photos/{{ $photos[$i]->image}} " alt="Card image cap">
            <div class="card-body">
             
                <p>{{ $photos[$i]->$desc_lang }}</p>
                <a href="/portfolio" class="btn btn-outline-secondary rounded-0 text-navy ">@lang('More..')</a>
            </div>
    </div>
    @endfor




   


    </div>

</div>