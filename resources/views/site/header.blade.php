
<header >
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
    <div class="container">
  <a class="navbar-brand text-navy" href="/"> @lang('Vladimir Cheredin')</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnav"
   aria-controls="mainnav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-navy" id="mainnav" >
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-auto ">
      <li class="nav-item ">
        <a class="nav-link " href="/">@lang('HOME') </a>
      </li>
      <li class="nav-item mx-3">
        <a class="nav-link" href="/about">@lang('ABOUT ME')</a>
      </li>

      <li class="nav-item mx-3">
        <a class="nav-link" href="/portfolio">@lang('MEDIA GALLERY')</a>
      </li>

      <li class="nav-item mx-3">
        <a class="nav-link" href="/blog">@lang('BLOG')</a>
      </li>

      <li class="nav-item mx-3">
        <a class="nav-link" href="/contact">@lang('CONTACTS')</a>
      </li>
      

    </ul>    

    
  <form action="/lang" method="post">
  @csrf

  <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-sm btn-secondary">
      <input type="radio" name="lang"  value="en" checked onchange="this.form.submit()"> En
    </label>
    
    <label class="btn btn-sm btn-secondary">
      <input type="radio" name="lang" value="ru" onchange="this.form.submit()" > Ru
    </label>
</div>

</form>
      

   
        
</nav>

<div  class="conratner-fluid bg-navy text-light text-center mt-5 pt-1" style="text-transform: uppercase; min-height:2.4rem">
<h3>@lang('Personal sport page')</h3>
</div>    
 
@include('inc.flash_mess')
</header>

