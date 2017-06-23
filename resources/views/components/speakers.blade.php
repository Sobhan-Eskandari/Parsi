
<div class="hover12 mx-auto">
    <figure class="mx-auto">
        @if(strlen($photo) === 0)
            <img src="{{ asset('images/steve-jobs.jpg') }}" alt="{{ $name }}" class="mx-auto d-block img-fluid" width="170px" height="170px" data-toggle="tooltip" title="{{ $desc }}" data-placement="top">
        @else
            <img src="{{ asset('images' . '/' . $photo) }}" alt="{{ $name }}" class="mx-auto d-block img-fluid" width="170px" height="170px" data-toggle="tooltip" title="{{ $desc }}" data-placement="top">
        @endif
    </figure>
</div>
<h5 class="text-center pt-3">{{ $name }}</h5>
<h6 class="text-center job pt-1">{{ $profession }}</h6>
