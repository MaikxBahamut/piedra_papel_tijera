@include ('header')
<body class="antialiased">
    <form method="get" action="{{ url('choose') }}">
    @csrf
        <select name="idUser" id="idUser">
        @foreach ($users as $user)
           <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
        </select>
        <input name='ctr' type='password' maxlength="50" minlength="8" required><br>
        <button type="submit">A JUGAR!!</button>
    </form>

    @isset($message)
        <h1>{{$message}}</h1>
    @endisset

    </body>
</html>
