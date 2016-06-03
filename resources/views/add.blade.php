@section('title', 'Добавление новостей')
@include('layouts.header')
<form action="edit.php">
    <label for="">
        Заголовок
        <input type="text">
    </label>
    <br>
    <label for="">
        Текст
        <textarea> </textarea>
    </label>
    <br>
    <label for="">
        Дата
        <input type="date">
    </label>
    <br>
    <label for="">
        <textarea name="DETAIL_TEXT" id="" cols="30" rows="10"></textarea>
    </label>
    <br>
    <label for="">
        Категория
        <input type="text">
    </label>
    <br>
</form>
@include('layouts.footer')

