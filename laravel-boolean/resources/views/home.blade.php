<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="nav_bar">
     <a href="http://"><img src="{{ asset('images/logo.png') }}" alt=""></a>
     <div class="menu">
         <a href="{{ route('home') }}"><h1>HOME</h1></a>
         <a href="{{ route('static_page.privacy') }}"><h1>CORSO</h1></a>
         <a href="http://"><h1>METODO</h1></a>
         <a href="http://"><h1>DOPO IL CORSO</h1></a>
         <a href="http://"><h1>FAQ</h1></a>
         <button type="button" class="btn nav_btn">Iscriviti</button>
     </div>
    </div>
    <div class="corpo">

    </div>
    <div class="my_footer">
        <div class="fot_top">

        </div>
        <div class="fot_bottom">

        </div>
    </div>
</body>
</html>
