@extends('front.master')

@section('content')
    <section class="container-fluid" style="font-family: cairo light;">
        <div class="row" style="direction: rtl">
            <div class="col-lg-offset-1 col-lg-10 col-sm-12 text-center">
                <p class="small-text margin_0">القوانين والمراسيم</p>
                <h2 class="topmargin_10 bottommargin_25" style="  font-family: cairo light;   color: #103e55;">
                    نحن نحترم
                    <strong style="color: #103e55;">القوانين</strong>
                </h2>

            </div>
        </div>
        <div class="row">
            @foreach ($laws as $law)
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body  text-center">
                            <h5 class="card-title" style="color: #103e55;">{{ $law->name }}</h5>
                            <p>{{ strip_tags(substr($law->content, 0, 60)) }}...
                            </p>
                            <a href="{{ route('lawDetail', $law->id) }}" class="theme_button muted_button">عرض</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
