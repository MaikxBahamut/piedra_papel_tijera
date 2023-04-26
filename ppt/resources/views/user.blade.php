@include ('header')
<html>
<head>
        <title>Login</title>
        <style>
            body {
                background-image: url('/img/pptimg.jpg');
            }

            form {
                background-color: #9C9EA2;
                width: 50%;
                margin: 0 auto;
                margin-top: 150px;
                margin-bottom: 100px;
            }

            button {
    display: block;
    margin: 0 auto;
    font-size: 40px;
    padding: 10px 20px;
    background-color: #ff6600;
    border: none;
    color: #fff;
}
button:hover {
    background-color: #CDD0D6;
}   
h1{
    color:red;
}
           
        </style>
    </head>
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
        @isset($message)
        <h1>{{$message}}</h1>
    @endisset
    </form>

    <!-- @isset($message)
        <h1>{{$message}}</h1>
    @endisset -->

    </body>
</html>
