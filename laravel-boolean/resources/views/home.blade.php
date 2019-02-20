@extends('layouts.app')
@section('title')
    Home
    {{-- qui invece di prenderlo dai data del controller lo scrivo direttamente --}}
@endsection
@section('content')
    <div class="corpo">
        <div class="jumbot">
            <div class="jumbo_cont">
                <h1>Diventa sviluppatore web</h1>
                <h2>6 mesi di corso intensivo online in diretta per imparare da zero il mestiere di web developer e trovare un nuovo lavoro nelle aziende top del settore</h2>
                <button type="button" class="btn btn-outline-primary btn_color">SCOPRI IL CORSO</button>
            </div>
            <img src="https://www.boolean.careers/images/common/mac2x.png" alt="">
        </div>
    </div>
@endsection
@php
    // dd(Request::route())
    //mi da tutti i dettagli della mia chiamata
@endphp
