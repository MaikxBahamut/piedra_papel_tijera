@include ('header')

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