@include ('header')
    <body class="antialiased">
    <h1>Elige tu movimiento</h1>
    <form method="POST">
        @csrf
        <button type="submit" name="move" value="rock">Piedra</button>
        <button type="submit" name="move" value="paper">Papel</button>
        <button type="submit" name="move" value="scissors">Tijeras</button>
    </form>

    <button type="submit">Guardar cambios</button>
</form>

    </body>
</html>