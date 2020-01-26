<div class="container-fluid" style="margin: 100px 0">
    <h2 class="text-center text-uppercase text-navy">@lang('Workout')</h2>

    <div class="row justify-content-center">

    @foreach($workouts as $workout)

    <div class="col-md-3 text-center">
            <img src="/images/workout/{{$workout->image}}" alt="image" width="200">
            <h4 class="text-navy" style="text-transform: uppercase">{{ $workout->$title_lang }}</h4>
            <p>{{ $workout->$desc_lang }}</p>
    </div>

    @endforeach


      

    </div>

</div>
