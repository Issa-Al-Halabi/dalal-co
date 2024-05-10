@extends('front.master')

@section('content')
    <section class="container-fluid" style="font-family: cairo light;">
        <div class="row">
            @foreach ($laws as $law)
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body  text-center">
                            <h5 class="card-title" style="color: #103e55;">{{ $law->name }}</h5>
                            <a href="{{ asset('storage/' . $law->file) }}" target="_blank"
                                class="theme_button muted_button">عرض الملف</a>
                            <a href="{{ asset('storage/' . $law->file) }}" target="_blank"
                                class="theme_button muted_button">تحميل الملف</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
