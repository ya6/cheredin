<!-- Messages -->

@if (isset($messages))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

    <ul>
        @foreach ($messages as $message)
        <li class=""><strong>Нельзя удалить! </strong>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- / VMesseges -->
