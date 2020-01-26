<div class="container-fluid" style="margin: 100px 0;">
    <h2 class="text-center text-uppercase mb-5 text-navy">@lang('Rewards')</h2>
<hr>


    
<ul class="list-inline d-flex justify-content-around flex-wrap">

@for ($i = 0; $i < ($rewards->count()<13 ? $rewards->count() : 12 ) ; $i++)
    
<li class="list-inline-item  my-4">
        <div style="width: 15rem; height: 15rem;">
        <img class="img-thumbnail" src="/images/rewards/{{ $rewards[$i]->image }}" alt="rewards" style="width: 100%; height: 100%; object-fit: cover"> 
        <div>
    </li>

    @endfor



    

   
      
   </ul>
        
   <hr>

</div>
<br>
<br>