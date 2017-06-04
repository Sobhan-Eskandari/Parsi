<div class="col p-1">
    @if(strlen($photo) === 0)
        <img src="{{ asset('images/davidB.jpg') }}" alt="{{ $name }}" class="mx-auto d-block img-fluid" width="130px" height="130px">
    @else
        <img src="{{ asset('images' . '/' . $photo) }}" alt="{{ $name }}" class="mx-auto d-block img-fluid" width="300px" height="300px">
    @endif
<p class="text-center">{{ $name }}</p>
</div>