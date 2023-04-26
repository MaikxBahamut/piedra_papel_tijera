@include ('header')
<html>
<head>
        <title>Guardar</title>
        <style>
    .success {
  background-color: #c9f9c9;
  color: #1c9903;
  padding: 12px;
  margin-bottom: 24px;
  border: 1px solid #1c9903;
}


.password {
  background-color: #f5f5f5;
  color: #555;
  padding: 12px;
  margin-bottom: 24px;
  border: 1px solid #ddd;
  font-family: monospace;
}


button {
  background-color: #007bff;
  color: black;
  border: none;
  padding: 12px;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #0069d9;
}


body {
  font-family: sans-serif;
  background-color: #f5f5f5;
  text-align: center;
  padding: 24px;
}

        </style>
    </head>
<body>
  <div class="success">USUARIO "{{$user->name}}" GUARDADO CON EXITO</div>
  <div class="password">{{$user->password}}</div>
  <form method="get" action="{{ url('users') }}">
    @csrf
    <button type="submit" name="user" value="{{$user->id}}">Login</button>
  </form>
</body>
</html>