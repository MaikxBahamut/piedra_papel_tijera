USUARIO GUARDADO CON EXITO

<form method="post" action="{{ url('user') }}">
    @csrf
    <button type="submit" name="user" value="{{$user->id}}">Login</button>
  
</form>