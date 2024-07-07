@extends('front.master')

@section('content')
    <section class="container-fluid" style="font-family: Cairo;">
        <h2 class="text-center p-5">
            <b>
                {{ $law->name }}
            </b>
        </h2>
        <div class="row">
            <div class="container">
                {!! $law->content !!}
            </div>
        </div>
    </section>
@endsection
