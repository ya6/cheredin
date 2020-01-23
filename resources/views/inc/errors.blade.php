<!--  Validation Eroors -->

@if ($errors->any())
    <div class="alert alert-danger col-6">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- / Validation Eroors -->