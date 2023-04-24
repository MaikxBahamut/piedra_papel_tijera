@include ('header')
<body class="antialiased">
    <h1>El usuario {{ $user->name }} ha escogido {{$movUser}}</h1>
    <h1>La CPU ha escogido {{$movCpu}}</h1>
    <h1>El resultado ha sido {{$resultado}}</h1>

    <form action="{{ route('update-user', ['id' => $user->id, 'resultado' => $resultado]) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">Guardar resultados</button>
    </form>
</body>