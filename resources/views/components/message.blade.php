<div>
    {{-- Message pass --}}
    @if (session('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{-- Print Message --}}
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
