@extends('layouts.main')

@section('title')
    Create
@endsection

@section('main')
<form action="{{route('people.store')}}" method="post">
    @csrf

    <input type="text" name="firstName" placeholder="First Name">
    <br>

    <input type="text" name="lastName" placeholder="Last Name">
    <br>

    <label for="birthDateInput">Date of birth</label>
    <input type="date" name="dateOfBirth" id="birthDateInput">
    <br>

    <input type="number" name="height" placeholder="Height">
    <br>

    <input type="submit" value="Register">
</form>
@endsection