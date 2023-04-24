@include ('header')
    <body class="antialiased">
    <h1>Elige tu movimiento:{{ $usuario->name }}</h1>
    <form method="get"  action="{{ url ('partida/' . $usuario->id) }}">
        @csrf   
        <button type="submit" name="move" value="rock">Piedra</button>
        <button type="submit" name="move" value="paper">Papel</button>
        <button type="submit" name="move" value="scissors">Tijeras</button>
    </form>

 
</form>

    </body>
</html>