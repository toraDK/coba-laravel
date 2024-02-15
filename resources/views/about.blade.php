@extends('layouts.main')

@section('container')    
    <h1>About Me</h1>
    <p>Name : {{ $name }} </p>
    <p>Emaail : {{ $email }} </p>
    <img src="img/{{ $image }} " alt="{{ $name }} " style="width: 500px">
@endsection

