<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <p>Привет мир</p>
{{-- Форма фхода с ошибками валидации   --}}
    <form action="{{route('login_check')}}" method="post" name="input">
        @csrf
        <fieldset>
            @error('email')
            <p>{{$message}}</p>
            @enderror
            <legend>Вход</legend>
            @error('login')
            <p>Введите имя</p>
            @enderror
            <p>Логин <input type="text" name="login"></p>
            @error('password')
            <p>Введите пароль</p>
            @enderror
            <p>Пароль <input type="password" name="password"></p>
        </fieldset>
        <p><input type="submit" value="Отправить"></p>
    </form>
</div>
</body>
</html>
