@include ('header')
<html>
<head>
        <title>Choose</title>
        <style>
            body {
                background-image: url('/img/pptimg.jpg');
            }

            form {
                background-color: #DA99E5;
                width: 50%;
                margin: 0 auto;
                margin-top: 150px;
                margin-bottom: 100px;
            }

            button {
    display: block;
    margin: 0 auto;
    font-size: 40px;
    padding: 10px 20px;
    background-color: #DA99E5;
    border: none;
    color: #fff;
}
button:hover {
    background-color: #C153D5;
}   
        h1 {
            color: blue;
                text-align:center;
                font-size: 40px;
            }
           
        </style>
    </head>
    <body class="antialiased">
    <form method="get"  action="{{ url ('partida/' . $usuario->id) }}">
        @csrf   
        <h1>Elige tu movimiento:{{ $usuario->name }}</h1>
        <button type="submit" name="move" value="rock">Piedra</button>
        <button type="submit" name="move" value="paper">Papel</button>
        <button type="submit" name="move" value="scissors">Tijeras</button>
    </form>

 
</form>

    </body>
</html>