<div class="container-fluid" s tyle="border: 2px solid blue;">
    <h2 class="text-center text-uppercase mb-5 text-navy">@lang('Events')</h2>

    <div class="row">

        <div class="col-md-6 p-0 m-0" s tyle="border: 2px solid blue;">
            <img class="w-100" src="/images/home_event/{{ $home_event->image }}" alt="image">
        </div>

        <div class="col-md-6 bg-navy text-light ">
            <div class="px-3" style="margin-top: 15%; bo rder: 2px solid blue;">
                <h4 style="text-transform: uppercase">{{ $home_event->$title_lang }}</h4>
                <p>{{ $home_event->$desc_lang }}</p>
            </div>
        </div>




    </div>
</div>
<br>
<br>
