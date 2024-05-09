@extends('front.master')

@section('content')
    <section class="container-fluid" style="font-family: cairo light;">
        <div class="row">
            @foreach ($maids as $maid)
                <div class="col-md-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="{{ asset('storage/' . $maid->image) }}" alt="Card image cap"
                            style="max-width:50%">
                        <div class="card-body">
                            <h5 class="card-title"style="color: #103e55;">{{ $maid->first_name }} {{ $maid->last_name }}
                            </h5>
                            {{-- <p class="card-text">{{ $maid->description }}</p> --}}
                            <a href="{{ route('Order', $maid) }}" class="theme_button muted_button">أطلب</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
