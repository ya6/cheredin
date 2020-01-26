<div class="container-fluid" style="margin: 100px 0;">
    <h2 class="text-center text-uppercase mb-5 text-navy">@lang('Partners')</h2>
<hr>


    
<ul class="list-inline d-flex justify-content-around">
@foreach($partners as $partner )
    <li class="list-inline-item">
        <img class="img-thumbnail" src="/images/partners/{{$partner->image}}" alt="partner" style="width: 18rem"> 
    </li>

@endforeach

      
   </ul>
        
   <hr>

</div>
<br>
<br>