@extends('layouts.main')

@section('title')
    Index
@endsection

@section('main')
    <a href="{{ route("people.create") }}">Register new person</a>
    <ul>
        @foreach ($people as $person)
            <li>
                {{ $person['firstName'] }}, {{ $person['lastName'] }}
                <br>
                ({{ $person['dateOfBirth']}})
            </li>
        @endforeach
    </ul>
@endsection
