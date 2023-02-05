<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
Здесь будет регистрация
{{-- Форма регистрации с ошибками валидации   --}}
<form action="{{route('regist_check')}}" method="post">
    @csrf
    <fieldset>
        <legend>Регистрация</legend>
        @error('login')
        <p>Введите логин</p>
        @enderror
        <p>Логин <input type="text" name="login"></p>
        @error('name')
        <p>Введите имя</p>
        @enderror
        <p>Имя <input type="text" name="name"></p>
        <p>Начало работы <input type="date" name="start_work"></p>
        <p>Выссшее - 0</p>
        <p>Бакалавриат - 1</p>
        <p>Среднее проф. - 2</p>
        <p>Начальное проф. - 3</p>
        <p>Среднее основное - 4</p>
        <p>Начальное - 5</p>
        @error('education')
        <p>Выберете образование</p>
        @enderror
        <p>Образование <input type="number" min="0" max="5" name="education"></p>
        @error('cash')
        <p>Введите оклад</p>
        @enderror
        <p>Оклад <input type="text" name="cash"></p>
        <p>Заведование метод. кабинетом<input type="checkbox" name="method_room" ></p>
        <p>Тетради со ставкой 0.15<input type="checkbox" name="notepad_015"></p>
        <p>Тетради со ставкой 0.1<input type="checkbox" name="notepad_01"></p>
        <p>Классное руководство<input type="checkbox" name="classroom_teacher"></p>
        <p>Должность методиста<input type="checkbox" name="methodist"></p>
        <p>Нет - 0</p>
        <p>Высшая - 1</p>
        <p>Первая - 2</p>
        <p>Вторая - 3</p>
        @error('qualification')
        <p>Выберете квалификацию</p>
        @enderror
        <p>Квалификация <input type="number" min="0" max="3" name="qualification"></p>
        <p>Заслуженный учитель<input type="checkbox" name="honored_teacher"></p>
        <p>Кандидат наук<input type="checkbox" name="candidate_science"></p>
        <p>Государственная награда<input type="checkbox" name="state_award"></p>
        <p>Знак отличия<input type="checkbox" name="badge"></p>
        @error('password')
        <p>Введите пароль</p>
        @enderror
        <p>Пароль <input type="password" name="password"></p>
        @error('password_res')
        <p>Повторите пароль</p>
        @enderror
        <p>Повторите пароль <input type="password" name="password_confirmation"></p>
    </fieldset>
    <p><input type="submit" value="Отправить"></p>
</form>
</body>
</html>
