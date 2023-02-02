<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Администратор</title>
</head>
<body>
<div>
    <p>Здесь будет панель администратора</p>

    <table>
        <tr><th>Имя</th><th>Начало работы</th><th>Оклад</th><th>Заведование метод. кабинетом</th><th>Тетради со ставкой 0.15</th></tr>
        @foreach($techers as $t => $n)
            <tr><th>{{$n['name']}}</th><th>{{$n['start_work']}}</th><th>{{$n['cash']}}</th><th>{{$n['method_room']}}</th><th>{{$n['notepad_015']}}</th></tr>
        @endforeach
    </table>


</div>
</body>
</html>
