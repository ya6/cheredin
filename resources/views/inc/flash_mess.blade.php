<!-- Messages -->

@if (session('message') != null)
<div class="alert alert-danger alert-dismissible fade show col" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

    <ul>
       
        <li class="">{{ session('message') }}</li>
       
    </ul>
</div>
@endif

<!-- / VMesseges -->
