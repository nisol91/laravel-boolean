@extends('layouts.app')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="templates nascondi">
        <div class="single_student">
            <div class="s_sx">
                <img src="" alt="">
            </div>
            <div class="s_c">
                <h1></h1>
                <h3></h3>
                <h2></h2>
            </div>
            <div class="s_dx">
                <a href=""><i class="fas fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="corpo" id="gender">
        <div class="form-group gender_select" style="width: 20%; margin:auto;">
            <label for="my-input">Gender Filter</label>
            <select id="my-input" class="custom-select">
                <option value="">Select the gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
            <button type="button" name="" id="filtra" class="btn btn-primary btn-lg btn-block my_button">Filtra</button>
        </div>
        <div class="students">
            <div class="students_cont">
                @foreach ($students as $student)
                <div class="single_student">
                    <div class="s_sx">
                        <img src="{{ $student['link'] }}" alt="{{ $student['nome'] }}">
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
