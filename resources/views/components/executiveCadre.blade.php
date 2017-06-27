<div class="col-lg-1 col-md-2 col-sm-3 col-xs-3 p-1">
    @if(strlen($photo) === 0)
        <img src="{{ asset('images/bill_gates.JPG') }}" alt="{{ $name }}" class="mx-auto d-block img-fluid" width="130px" height="130px">
    @else
        <img src="{{ asset('images' . '/' . $photo) }}" alt="{{ $name }}" class="mx-auto d-block img-fluid" width="300px" height="300px">
    @endif
<p class="text-center mt-3">{{ $name }}</p>
</div>