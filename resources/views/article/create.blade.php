@extends('layout.base')
@section('title', 'blog personal')

@section('content')

    <form action="" method="post">
        
        <label for="name">Nombre de Usuario</label>
        <input type="text" name="name" id="" required>

        <label for="email">Correo Electronico</label>
        <input type="email" name="email" id="" required>

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="" required>

        <label for="passwordConfirm">Confirmar Contraseña</label>
        <input type="password" name="passwordConfirm" id="" required>

        <label for="termscheck">Estoy de acuerdo con los terminos y servicios</label>
        <input type="checkbox" name="" id="" required>

        <button type="submit">Crear Cuenta</button>

    </form>

@endsection