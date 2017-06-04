<div class="col">
    <a href="{{ route('show_post', $id) }}">
        @if(strlen($photo) === 0)
            <img src="{{ asset('images/java.jpg') }}" alt="{{ $title }}" class="mx-auto d-block img-fluid" width="300px" height="300px">
        @else
            <img src="{{ asset('images' . '/' . $photo) }}" alt="{{ $title }}" class="mx-auto d-block img-fluid" width="300px" height="300px">
        @endif

        <h5 class="pt-4" style="{{$style}}">{{ $title }}</h5>
        <p>نوشته شده در: {{ $date }}</p>

    </a>
</div>