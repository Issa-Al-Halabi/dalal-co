@extends('front.master')

@section('content')
    <section class="container-fluid" style="font-family: Cairo;">
        <div class="row"
            style="display: flex;justify-content: center;flex-wrap: wrap;align-items: center;gap: 20px;margin-top: 30px;">
            @foreach ($maids as $maid)
                <div class="col-md-3" style="box-shadow: 0px 0px 7px 3px #eee;">
                    <div class="card text-center">
                        @if ($maid->image)
                            <img class="card-img-top" src="{{ asset('storage/' . $maid->image) }}" alt="Card image cap"
                                style="max-width:50%">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title"style="color: #103e55;">{{ $maid->first_name }} {{ $maid->last_name }}
                            </h5>
                            {{-- <p class="card-text">{{ $maid->description }}</p> --}}
                            <a href="{{ route('Order', $maid) }}"
                                class="theme_button muted_button">{{ __('home.the details') }} </a>
                        </div>
                        @if ($maid->order)
                            <div class="text-center"
                                style="color: white;background-color: red;padding: 5px;border-radius: 10px;position: absolute;top: 10px;">
                                {{ __('home.No longer available') }}
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <div class="w-100 text-center">
            {{ $maids->links() }}
        </div>
    </section>
@endsection
