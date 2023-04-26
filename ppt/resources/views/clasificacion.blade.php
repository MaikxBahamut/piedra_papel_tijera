@include ('header')
<html>
<head>
        <title>Clasificacion</title>
        <style>
    
table {
  border-collapse: collapse;
  width: 100%;
  max-width: 1000px;
  margin: 0 auto;
}

th, td {
  padding: 20px;  
  text-align: left;
  background-color: #555;
  color: white;
}




h1 {
  text-align: center;
  font-size: 36px;
  margin-bottom: 24px;
}

body {
  font-family: sans-serif;
  background-color: #f5f5f5;
}     
        </style>
    </head>
    <body class="antialiased">
<h1>Clasificaciones</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Victorias</th>
        <th>Derrotas</th>
        <th>Empates</th>
    </tr>
@foreach ($users as $user)
    <tr>
        <th>{{$user->name}}</th>
        <th>{{$user->win}}</th>
        <th>{{$user->lose}}</th>
        <th>{{$user->draw}}</th>
    </tr>
@endforeach
</table>
</body>