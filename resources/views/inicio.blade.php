<h1>pagina de inicio</h1>

@auth()
El usuario esta autenticado <b>nombre:{{auth()->user()->name}}</b><br>
@endauth

@guest()
    El usuario no esta autenticado<br>
    <a href="/login">login</a>
@endguest
