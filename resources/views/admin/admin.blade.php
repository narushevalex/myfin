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
    <a href="{{route('regist')}}">Добавить сотрудника</a>

{{--Таблица с данными из модели Учителя--}}
    <table>
        <tr><th>Имя</th><th>Начало работы</th>><th>Образования</th><th>Оклад</th><th>Заведование метод. кабинетом</th><th>Тетради со ставкой 0.15</th><th>Тетради со ставкой 0.1</th><th>Классное руководство</th><th>Должность методиста</th><th>Квалификация</th><th>Заслуженный учитель</th><th>Кандидат наук</th><th>Государственная награда</th><th>Знак отличия</th></tr>
        @foreach($teachers as $t => $n)
            <tr><th>{{$n['name']}}</th><th>{{$n['start_work']}}</th><th>{{$n['education']}}</th><th>{{$n['cash']}}</th><th>{{$n['method_room']}}</th><th>{{$n['notepad_015']}}</th><th>{{$n['notepad_01']}}</th><th>{{$n['classroom_teacher']}}</th><th>{{$n['methodist']}}</th><th>{{$n['qualification']}}</th><th>{{$n['honored_teacher']}}</th><th>{{$n['candidate_science']}}</th><th>{{$n['state_award']}}</th><th>{{$n['badge']}}</th></tr>
        @endforeach
    </table>


</div>
</body>
</html>
