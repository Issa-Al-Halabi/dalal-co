@extends('front.master')

@section('content')
    <section class="container-fluid" style="font-family: cairo light;">
        <div class="row">
            @foreach ($laws as $law)
                <div class="col-md-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="front-assets/images/team/photo_2024-02-05_20-40-44.jpg"
                            alt="Card image cap" style="max-width:50%">
                        <div class="card-body  text-center">
                            <h5 class="card-title" style="color: #103e55;">{{ $law->name }}</h5>
                            <a href="{{ asset('storage/' . $law->file) }}" target="_blank"
                                class="theme_button muted_button">تحميل الملف</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
