<div class="nav_bar">
    <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
    <div class="menu">
        {{-- con request e un ternario posso dire: se il nome della mia rotta e' effettivamente quello li, allora la classe e' active, se no non ha classe active. serve per il bordo sotto --}}
        <a href="{{ route('home') }}"><h1 class={{ Request::route()->getName() == 'home' ? 'active' : null }}>HOME</h1></a>
        <a href="{{ route('corso') }}"><h1 class={{ Request::route()->getName() == 'corso' ? 'active' : null }}>CORSO</h1></a>
        {{-- <a href="http://"><h1 class="">METODO</h1></a> --}}
        <a href="{{ route('metodo') }}"><h1 class={{ Request::route()->getName() == 'metodo' ? 'active' : null }}>METODO</h1></a>

        <a href="{{ route('dopo_corso') }}"><h1 class={{ Request::route()->getName() == 'dopo_corso' ? 'active' : null }}>DOPO IL CORSO</h1></a>
        <a href="http://"><h1 class="">FAQ</h1></a>
        <button type="button" class="btn nav_btn">Iscriviti</button>
    </div>
</div>
