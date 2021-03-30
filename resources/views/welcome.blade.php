@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<a href="{{ route('daftar') }}"> daftar</a>