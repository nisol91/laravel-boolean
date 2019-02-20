@extends('layouts.app')
@section('title')
    {{ $title }}
    {{ $studente['nome'] }}
@endsection
@section('content')
    <div class="corpo">
        <div class="students">
            <div class="students_cont">
                <ul>
                @foreach ($studente as $k => $val)
                    <li>{{ $k }}: {{ $val }}</li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
