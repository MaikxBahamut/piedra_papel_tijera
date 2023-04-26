@include ('header')
<html>
<head>
        <title>Resultado</title>
        <style>
            body {
                background-image: url('/img/pptimg.jpg');
            }

            form {
                background-color: #F34C73;
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
    background-color: #EB1244;
}   
h1 {
    background-color: #EFDDF1;
  text-align: center;
  font-size: 50px;
}
           
        </style>
    </head>
<body class="antialiased">
    <h1>El usuario {{ $user->name }} ha escogido {{$movUser}}</h1>
    <h1>La CPU ha escogido {{$movCpu}}</h1>
    <h1>El resultado ha sido {{$resultado}}</h1>

    <form method="get" action="{{ url('choose') }}">
        @csrf
        <button type="submit" name="user" value="{{$user->id}}">Volver a jugar</button>
    </form>
    <form method="get" action="{{ url('clasificacion') }}">
    @csrf
    <button type="submit" >CLASIFICACION</button>
  
</form>
</body>