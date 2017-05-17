@extends('layout.default')

@section('title','our staff')

@section('content')

    <h1>STAFF</h1>

    @if(!empty($staff))

        <ul>
            @foreach($staff as $person)
                <li>
                    {{$person['name']}}

                </li>
        @endforeach

    @endif

@endsection