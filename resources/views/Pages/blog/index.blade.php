@extends ('layouts.sitelayout')

@section('title', 'Vladimir Reredin | Blog')

@section('content')

<div class="container">
    <h2 class="text-center my-4 text-navy ">@lang('Blog')</h2>
    @if($search != null)

    @if(count($blogs)>0)
    <h3 class="text-center">@lang('Serch for'): "{{ $search }}" - {{ count($blogs) }}
        {{trans_choice('posts', count($blogs)) }}</h3>
    @else
    <h3 class="text-center">@lang('Serch for'): "{{ $search }}" - @lang('nothing found')</h3>
    @endif

    @elseif(session('category') != null)
    <h3 class="text-center">{{ $categories[session('category')-1]->$category_lang}}</h3>
    @else
    <h3 class="text-center">@lang('All')</h3>
    @endif

    <div class="row">
        <div class="order-xs-2  order-sm-2 order-md-1 col-sm-12 col-md-8" style="b order: 2px solid blue">

            @foreach ($blogs as $blog)


            <div class="bg-light p-4" style="bo rder: 2px solid red">


                <div class="card border-0">
                    <div class="card-header card border-0">
                        <p class="h4 my-3">{{ Str::limit($blog->$title_lang, 50) }}</p>
                    </div>

                    <div class="card-body m-0 p-0">

                        <div style="height: 200px; background-position: center center ; background-size: cover;
                             background-repeat: norepeat; 
                             background-image: url(/images/blogs/{{ $blog->image  ?? 'blog_default.jpg'}} )">
                        </div>

                        <div class="row">
                            <div class="col pl-5 pb-3">
                                <p class="h6 mt-2"> <i class=" text-secondary material-icons align-text-top">watch</i>
                                    {{ $blog->updated_at->isoFormat('DD-MM-Y') }}</p>
                                <p class="h5"> <i class="text-secondary material-icons align-top">person </i>
                                    {{ $blog->user->name }}</p>
                                <p class="h6 "> <i class="text-secondary material-icons align-text-top ">label</i>
                                    {{ $blog->category->$category_lang }}</p>

                            </div>
                            <div class="col pr-5 d-flex justify-content-end align-items-center">
                                <p class=" h6"> <i class=" text-secondary material-icons align-text-top">comment</i>
                                {{$blog->comments()->count().' '.trans_choice('comments', $blog->comments()->count()) }} 
                            </div>
                        </div>
                        <div class=" ml-4 mb-4" style="b order:1px solid red">
                            <a name="" id="" class="rounded-0    btn btn-outline-secondary "
                            href="/blog/{{ $blog->id }}" role="button" style="width:10em"> @lang('View post') </a>
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

        <div class="order-xs-1  order-sm-1 order-md-2 col-md-4 col-sm-12 my-xs-4" style="b order: 2px solid green">
            <div class="card rounded-0  bg-light" style="w idth: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">@lang('Search')</h5>
                    <form id="search_form" class="form-inline my-2 my-lg-0" action="/blog" method="get">
                        @csrf

                        <input id="search_input"
                            class="border-secondary bg-light form-control border-top-0 border-left-0 border-right-0 w-75 rounded-0"
                            type="search" placeholder="@lang('Search')" aria-label="Se arch" name="search">
                        <button id="search_btn" class="btn btn-outline-secondary  rounded-0" type="submit">
                            <i class="material-icons align-bottom">search</i></button>
                    </form>
                </div>
            </div>

            </br>
            <div class="card rounded-0 bg-light" style="w idth: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">@lang('Categories')</h5>
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-secondary" href="/blog">@lang('All') </a>
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
