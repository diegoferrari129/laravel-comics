@extends('layouts.app')

@section('comics')
    <section class="comics">

        <div class="container">
            <div class="row">

                @foreach ($comics as $comic)
                    <div class="col-2">

                        <div class="comics_img">
                            <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>

                        <div class="comics_title">
                            <h6>
                                {{ strtoupper($comic['title']) }}
                            </h6>
                        </div>

                    </div>
                @endforeach

                <div class="comics_btn">
                    <button>
                        LOAD MORE
                    </button>
                </div>

            </div>
        </div>

    </section>
@endsection
