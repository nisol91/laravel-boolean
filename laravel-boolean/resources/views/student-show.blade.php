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

                @forelse ($studente as $k => $val)
                  <li>{{ $k }}: {{ $val }}</li>
                @empty
                    <li>questo studente non esiste</li>
                @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
