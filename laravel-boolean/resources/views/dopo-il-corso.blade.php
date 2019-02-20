@extends('layouts.app')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="corpo">
        @foreach ($students as $student)
            <a href="{{ route('dopo_corso.show', $student['slug']) }}"><h1>{{ $student['nome'] }}</h1></a>
            <h1>{{ $student['eta'] }}</h1>

        @endforeach
    </div>
@endsection
