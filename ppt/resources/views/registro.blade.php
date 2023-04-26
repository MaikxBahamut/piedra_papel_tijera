<!DOCTYPE html>
<html>
    <head>
        <title>Registro</title>
        <style>
            body {
                background-image: url('/img/pptimg.jpg');
            }

            form {
                background-color: #B0C8E1;
                width: 50%;
                margin: 0 auto;
                margin-top: 150px;
                margin-bottom: 100px;
            }

            div {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
           

            label {
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        <form method="post" action="{{ url('guardar') }}">
            @csrf
            <label>Nombre:</label>
            <input name='name' type='text' maxlength="50"  required><br>
            <label>Contraseña:</label>
            <input name='password' type='password' maxlength="50" minlength="8" required><br>
            <button type="submit">Guardar usuario</button>
        </form>
    </body>
</html>