@extends('layouts.main')

@section('title')
    Index
@endsection

@section('main')
    <a href="{{ route('people.create') }}">Register new person</a>
    <ul>
        @foreach ($people as $person)
            <li>
                {{ $person['firstName'] }}, {{ $person['lastName'] }}
                <br>
                ({{ $person['dateOfBirth'] }})
                <form action="{{route('people.destroy', $person->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="👋">
                </form>
            </li>
        @endforeach
    </ul>
@endsection
