@include ('header')
<body class="antialiased">
    <form>
    @csrf
    @method('PUT')
        <select name="user" id="user">
        @foreach ($users as $user)
           <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
        </select>
        <button type="submit">Guardar cambios</button>
    </form>
    </body>
</html>
