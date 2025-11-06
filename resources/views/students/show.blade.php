@extends('layout.main')
@section('content')

<div class = "container">
    <h1>{{ $firstName }}</h1>
    <h1>{{ $middleName }}</h1>
    <h1>{{ $lastName }}</h1>
    <h1>{{ $birthday }}</h1>
    <h1>{{ $age }}</h1> 
</div>

@endsection
