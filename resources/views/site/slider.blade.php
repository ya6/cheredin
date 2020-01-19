<div id="mycarousel" class="carousel slide " data-ride="carousel">
<ol class="carousel-indicators">

<li data-target="#mycarousel" data-slide-to="0" class="active"></li>

@for ($i = 1; $i < $slides->count(); $i++)

  <li data-target="#mycarousel" data-slide-to="{{$i}}"></li>
    
@endfor

  </ol>

  <div class="carousel-inner" style="max-height:700px;">

  @foreach($slides as $slide)
  
    @if (($slides->first()) == ($slide) ) 
      <div class="carousel-item active">
          <img class="d-block w-100 " src="/images/slider/{{ $slide->image }}" alt="First slide">
          <div class="carousel-caption  d-sm-block d-none text-navy" style="bottom:35%; background:white; opacity: 0.7; color:black">
            <h1>@lang('Welcom to sport page of Bladimir Cheredin')</h1>
            <h3>@lang('Strength sport and weight training exercise')</h3>
        </div>
        </div>
    @else 
    <div class="carousel-item">
          <img class="d-block w-100" src="/images/slider/{{ $slide->image }}" alt="Second slide" >
    </div>
    @endif
  @endforeach
  

  </div>
  <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>