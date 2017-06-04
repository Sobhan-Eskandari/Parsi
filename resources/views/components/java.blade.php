<div class="col">
    <a href="{{ route('show_post', $id) }}"><img src="{{ asset('images/java.jpg') }}" alt="" class="mx-auto d-block img-fluid"
         width="300px" height="300px">
    <h5 class="pt-4" style="{{$style}}">{{ $title }}</h5>
    <p>نوشته شده در: {{ $date }}</p></a>
</div>