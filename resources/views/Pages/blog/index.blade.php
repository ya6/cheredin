@extends ('layouts.sitelayout')

@section('title', 'Vladimir Reredin | Blog')

@section('content')

<div class="container">
    <h2 class="text-center my-4 text-navy ">@lang('BLOG')</h2>

    <div class="row">
        <div class="col-sm-12 col-md-8" style="b order: 2px solid blue">

            @foreach ($blogs as $blog)


            <div class="bg-light p-4" style="bo rder: 2px solid red">


                <div class="card border-0">
                    <div class="card-header card border-0">
                        <p class="h4 my-3">{{ $blog->$title_lang }}</p>
                    </div>
                    <div class="card-body m-0 p-0">

                       <div  style="height: 200px; background-position: center center ; background-size: cover;
                             background-repeat: norepeat; b order: 2px solid green;
                             background-image: url('/images/blogs/{{ $blog->image  ?? "blog_default.jpg"}}')">
                       </div>

                        <div class="row">
                            <div class="col">
                                <p class="h6 mt-2"> <i class=" text-secondary material-icons align-text-top">watch</i>
                                    {{ $blog->created_at->isoFormat('DD-MM-Y') }}</p>
                                <p class="h5"> <i class="text-secondary material-icons align-top">person </i>
                                    {{ $blog->user->name }}</p>
                                <p class="h6 "> <i class="text-secondary material-icons align-text-top ">label</i>
                                    {{ $blog->category->$category_lang }}</p>

                                <a name="" id="" class="rounded-0 mt-1 btn btn-outline-secondary " href="#" role="button" style="width:10em"> More </a>
                            </div>

                        </div>

                    </div>


                </div>









            </div>
            <br>
            @endforeach


            <div class="row">
                <div class="mx-auto"> @if(method_exists($blogs, 'links'))
                    {{ $blogs->appends(['category' => session('category') ])->links() }}
                    @endif
                </div>
            </div>

        </div> <!-- /row-8 -->

        <div class="col-4 d-none d-md-block" style="b order: 2px solid blue">
            <div class="card rounded-0  bg-light" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">@lang('SEARCH')</h5>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="border-secondary bg-light form-control border-top-0 border-left-0 border-right-0 w-75 rounded-0" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary  rounded-0" type="submit">
                            <i class="material-icons align-bottom">search</i></button>
                </div>
            </div>

            </br>
            <div class="card rounded-0 bg-light" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">@lang('CATEGORIES')</h5>
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-secondary" href="/blog">@lang('All categories') </a>
                        </li>
                        @foreach ($categories as $category)
                        <li class="nav-item ">
                            <a class="nav-link text-secondary" href="/blog?category={{ $category->id }}">{{ $category->$category_lang }} </a>
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

</script>



@endsection