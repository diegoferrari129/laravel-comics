@extends('layouts.app')

@section('jumbo')
    <div class="container">
        <div class="row">
            <div class="col-2">

                @foreach ($comics as $comic)
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                @endforeach

            </div>
        </div>
    </div>
@endsection
