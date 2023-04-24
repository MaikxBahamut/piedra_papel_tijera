USUARIO "{{$user->name}}" GUARDADO CON EXITO
{{$user->password}}

<form method="get" action="{{ url('users') }}">
    @csrf
    <button type="submit" name="user" value="{{$user->id}}">Login</button>
  
</form>