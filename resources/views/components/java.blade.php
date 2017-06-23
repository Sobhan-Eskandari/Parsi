<div class="col-3">
    <div class="card">
        <a href="{{ route('show_post', $id) }}">

            @if(strlen($photo) === 0)
                <img src="{{ asset('images/java.jpg') }}" alt="{{ $title }}"
                     class="mx-auto d-block card-img-top img-fluid" height="300px" width="300px">
            @else
                <img src="{{ asset('images' . '/' . $photo) }}" alt="{{ $title }}" class="mx-auto d-block img-fluid"
                     height="300px" width="300px">
            @endif
            <div class="row justify-content-center">
                <div class="card-block px-3 py-3">
                    <h5 class="card-text pt-2" style="{{$style}}">{{ $title }}</h5>
                    <p class="card-text">نوشته شده در: {{ $date }}</p>
                </div>
            </div>
        </a>
    </div>
</div>