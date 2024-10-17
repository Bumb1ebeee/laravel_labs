<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    TABLE {
        border-collapse: collapse; /* Убираем двойные линии между ячейками */
        width: 300px; /* Ширина таблицы */
    }
    TH, TD {
        border: 1px solid black; /* Параметры рамки */
        text-align: center; /* Выравнивание по центру */
        padding: 4px; /* Поля вокруг текста */
    }
    TH {
        background: #c8abf3; /* Цвет фона ячейки */
        height: 40px; /* Высота ячеек */
        vertical-align: bottom; /* Выравнивание по нижнему краю */
        padding: 10px; /* Убираем поля вокруг текста */
    }
</style>
<body>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>Название товара</th>
        <th>Количество</th>
        <th>Дата создания</th>
        <th>Заказчик</th>
        <th>Статус</th>
        <th>Изменить статус</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($orders as $order)
        <x-orders :order="$order" />
    @endforeach
    </tbody>
</table>
</body>
</html>
