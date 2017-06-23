<div class="col">
    <div class="card">
    <a href="{{ route('show_post', $id) }}">

        @if(strlen($photo) === 0)
            <img src="{{ asset('images/java.jpg') }}" alt="{{ $title }}" class="mx-auto d-block img-fluid card-img-top" height="100%" width="100%">
        @else
            <img src="{{ asset('images' . '/' . $photo) }}" alt="{{ $title }}" class="mx-auto d-block img-fluid">
        @endif
            <div class="card-block px-1 py-3">
                <h5 class="card-text pt-2" style="{{$style}}">{{ $title }}</h5>
                <p class="card-text">نوشته شده در: {{ $date }}</p>
            </div>
    </a>
    </div>
</div>