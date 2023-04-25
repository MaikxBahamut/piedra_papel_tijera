@include ('header')
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