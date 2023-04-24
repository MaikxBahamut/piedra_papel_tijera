@include ('header')
<body class="antialiased">
    <form method="get" action="{{ url('choose') }}">
    @csrf
        <select name="user" id="user">
        @foreach ($users as $user)
           <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
        </select>
        <button type="submit">A JUGAR!!</button>
    </form>
    </body>
</html>
