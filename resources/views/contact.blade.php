@extends('layouts.app')

@section('title-block')Страница контактов@endsection

@section('content')
 <H1>Сторінка контактів</H1>   
<form action="/contact/submit" method="post">
@csrf
<div class="form-group">
    <label for="name">Введіть імя</label>
    <input type="text" name="name" placeholder="Введіть імя" id="name" class="form-control">
</div>
<div class="form-group">
    <label for="Email">Введіть email</label>
    <input type="text" name="email" placeholder="Введіть email" id="email" class="form-control">
</div>
<div class="form-group">
    <label for="name">Тема повідомлення</label>
    <input type="text" name="name" placeholder="Тема повідомлення" id="name" class="form-control">
</div>
<div class="form-group">
    <label for="message">Повідомлення</label>
    <textarea name="message" id="message" class="form-control" placeholder="Введіть повідомлення"></textarea>
</div>
<button type="submit" class="btn btn-succes">Відправити</button>

</form>
@endsection
