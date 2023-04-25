<form method="post" action="{{ url('guardar') }}">
    @csrf
    <label>Nombre:</label>
    <input name='name' type='text' maxlength="50"  required><br>
    <label>Contraseña:</label>
    <input name='password' type='password' maxlength="50" minlength="8" required><br>
    <button type="submit">Guardar usuario</button>
</form>