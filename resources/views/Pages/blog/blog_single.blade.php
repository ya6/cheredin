@extends ('layouts.sitelayout')

@section('title', 'Vladimir Reredin | Blog')

@section('content')

<div class="container">
    <h2 class="text-center my-4 text-navy ">@lang('BLOG SINGLE')</h2>

    <div class="row">
        <div class="order-xs-2  order-sm-2 order-md-1 col-sm-12 col-md-8" style="b order: 2px solid blue">
            <div class="bg-light p-4" style="b order: 2px solid red">
                <div class="card border-0">
                    <p class="h6 mt-2"> <i class=" text-secondary material-icons align-text-top">watch</i>
                        {{ $blog->created_at->isoFormat('DD-MM-Y') }}</p>
                    <div class="card-header card border-0">
                        <p class="h4 my-3">{{ $blog->$title_lang }}</p>
                    </div>
                    <div class="card-body m-0 p-0">
                        <div style="height: 400px; background-position: center center ; background-size: cover;
                             background-repeat: norepeat; b order: 2px solid green;
                             background-image: url(/images/blogs/{{ $blog->image  ?? 'blog_default.jpg'}})">
                        </div>
                        <div class="my-4">
                            <p class="h5">{{ $blog->$desc_lang }}</p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="h5"> <i class="text-secondary material-icons align-top">person </i>
                                    {{ $blog->user->name }}</p>
                                <p class="h6 "> <i class="text-secondary material-icons align-text-top ">label</i>
                                    {{ $blog->category->$category_lang }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
<!-- Comments accordeon -->

<!--  -->

<div id="accordion1" class="mt-0">
  <div class="card rounded-0 border-left-0 border-right-0">

    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         @lang('All Comments')   5 шт.
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
      <div class="card-body">
  Комменты к посту
      </div>
    </div>

  </div> 
</div>


<div id="accordion2" class="mt-0">
  <div class="card rounded-0 border-left-0 border-right-0">

    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
         @lang('Write a comment')
        </button>
      </h5>
    </div>

    <div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
      <div class="card-body">
 Электройная почта В комментарии не отбражается
      </div>
    </div>

  </div>
</div>




<!-- /Comments accordeon -->

        </div> <!-- /row-8 -->

        <div class="order-xs-1  order-sm-1 order-md-2 col-md-4 col-sm-12 my-xs-4" style="b order: 2px solid green">
            <div class="card rounded-0  bg-light" style="w idth: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">@lang('SEARCH')</h5>
                    <form id="search_form" class="form-inline my-2 my-lg-0" action="/blog" method="get">
                        @csrf

                        <input id="search_input"
                            class="border-secondary bg-light form-control border-top-0 border-left-0 border-right-0 w-75 rounded-0"
                            type="search" placeholder="Search" aria-label="Se arch" name="search">
                        <button id="search_btn" class="btn btn-outline-secondary  rounded-0" type="submit">
                            <i class="material-icons align-bottom">search</i></button>
                    </form>
                </div>
            </div>

            </br>
            <div class="card rounded-0 bg-light" style="w idth: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">@lang('CATEGORIES')</h5>
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-secondary" href="/blog">@lang('All categories') </a>
                        </li>
                        @foreach ($categories as $category)
                        <li class="nav-item ">
                            <a class="nav-link text-secondary"
                                href="/blog?category={{ $category->id }}">{{ $category->$category_lang }} </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>

@endsection

@section('script')

<script>
</script>

<script>
    let page_en = '{{ $page_en }}';
    let page_ru = '{{ $page_ru }}';


    let mainnav = document.querySelector('#mainnav');


    li = mainnav.children['0'].children;
    for (let index = 0; index < li.length; index++) {

        if (li[index].textContent.trim() == page_en || li[index].textContent.trim() == page_ru) {

            li[index].classList.add('active');
        }
    }

</script>

<script>
    let search_btn = document.querySelector('#search_btn');
    let search_input = document.querySelector('#search_input');
    let search_form = document.querySelector('#search_form');

    search_btn.addEventListener('click', (e) => {
        e.preventDefault();
        // console.log(search_input.value);
        if (search_input.value != "")
            search_form.submit();
    });

</script>



@endsection