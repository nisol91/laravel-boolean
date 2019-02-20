@extends('layouts.app')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="corpo">
        <div class="students">
            <div class="students_cont">
                @foreach ($students as $student)
                <div class="single_student">
                    <div class="s_sx">
                        <img src="{{ $student['link'] }}" alt="">
                    </div>
                    <div class="s_c">
                        <h1>{{ $student['nome'] }} ({{ $student['eta'] }} Anni)</h1>
                        <h2>Ora è web developer in: {{ $student['azienda'] }}</h2>
                    </div>
                    <div class="s_dx">
                        <a href="{{ route('dopo_corso.show', $student['slug']) }}"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
